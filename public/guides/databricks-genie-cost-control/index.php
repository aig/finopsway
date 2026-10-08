<?php
$page = [
  'title' => 'Databricks Genie Cost Control: Budgets and Usage Blocks | FinOpsWay',
  'description' => 'Set Databricks Genie budgets, block usage at a threshold and review Genie spend from system tables.',
  'path' => '/guides/databricks-genie-cost-control/',
  'og_type' => 'article',
  'og_title' => 'Databricks Genie Cost Control: Budgets and Usage Blocks',
  'og_description' => 'Set a Genie budget, block usage at the threshold and review usage from system tables.',
  'image' => 'https://finopsway.com/guides/databricks-genie-cost-control/images/image_1.jpg',
  'image_alt' => 'Databricks Genie cost control thumbnail',
  'published' => '2026-08-17',
  'modified' => '2026-10-06',
  'author' => 'https://www.linkedin.com/in/protmaks/',
  'json_ld' => <<<'JSON'
{"@context":"https://schema.org","@type":"Article","mainEntityOfPage":{"@type":"WebPage","@id":"https://finopsway.com/guides/databricks-genie-cost-control/"},"headline":"Databricks Genie cost control: budgets and usage blocks","description":"Set Databricks Genie budgets, block usage at a threshold and review Genie spend from system tables.","image":"https://finopsway.com/guides/databricks-genie-cost-control/images/image_1.jpg","datePublished":"2026-08-17","dateModified":"2026-10-06","author":{"@type":"Person","name":"Maksim Pachkouski","url":"https://www.linkedin.com/in/protmaks/"},"publisher":{"@type":"Organization","name":"FinOpsWay","url":"https://finopsway.com/"},"articleSection":"Databricks Genie cost control","keywords":"Databricks Genie, Genie budgets, block usage, Unity AI Gateway, Databricks cost control"}
JSON,
];
include __DIR__ . '/../../includes/header.php';
?>
  <main id="main" class="article-page">
    <header class="article-hero"><p class="eyebrow">Genie cost control</p><h1>Databricks Genie cost control: budgets and usage blocks</h1><p class="article-standfirst">A budget notification tells you spend has crossed a limit. A usage block stops new Genie requests at that limit.</p><div class="author-row"><img src="../../img/maksim-profile.jpg" width="96" height="96" alt="Maksim Pachkouski" /><div><p><strong>Maksim Pachkouski</strong></p><p>Databricks MVP · August 17, 2026 · 5 min read</p><p><a href="https://medium.com/databrickscommunity/databricks-genie-cost-control-how-to-set-budgets-and-block-usage-a13014c1f9ba" target="_blank" rel="noopener">Original publication on Medium ↗</a></p></div></div></header>
    <article class="article-body">
      <p>Genie usage can start small and grow quickly when a new capability is available to many people. A notification budget gives the administrator visibility, but it does not prevent more usage after the notification arrives.</p>
      <p>Databricks Genie budgets can now include a blocking action. When the configured threshold is reached, users covered by that budget can no longer submit new Genie requests. This gives teams a hard limit as well as an alert.</p>
      <h2>Choose the scope before the amount</h2>
      <p>Start by deciding who shares a limit. The budget settings support a shared threshold across the users and workspaces in the budget, a default per-user threshold, and an override for a named user or group.</p>
      <div class="article-comparison"><div><p class="eyebrow">Shared threshold</p><strong>One limit for a budget</strong><p>Use it to cap total Genie spend for the group of users and workspaces covered by the budget.</p></div><div><p class="eyebrow">Per-user threshold</p><strong>Limits tailored to access</strong><p>Set a default, then give selected users or groups a different limit where there is a clear need.</p></div></div>
      <p>Test with a small value in a non-production budget. Usage data and the cost dashboard can update later than the enforcement action. Check that the user is blocked when the threshold is crossed, then raise the limit and confirm that access returns.</p>
      <h2>Configure the budget block</h2>
      <ol class="guide-list"><li>Create or open a Genie budget in the Databricks account console.</li><li>Set the shared budget or per-user threshold in the currency and period you want to control.</li><li>Add an alert so administrators know when the threshold is reached.</li><li>Add the <strong>Block usage</strong> action for the threshold.</li><li>Test with a pilot user or group before applying the policy to the wider workspace.</li></ol>
      <figure><img src="./images/genie-budget-configuration.jpg" width="2000" height="796" alt="Databricks Genie budget page with shared and per-user thresholds and blocking enabled." /><figcaption>Set shared and per-user thresholds, then choose both block and alert actions when the threshold is exhausted.</figcaption></figure>
      <p>Be precise when user and group rules overlap. A rule for a group can determine the limit applied to a member, even if that member also has an individual entry. Test the exact combinations used in your account.</p>
      <figure><img src="./images/genie-budget-blocked-user.jpg" width="2000" height="897" alt="Databricks Genie budget usage page showing a user blocked after exceeding a per-user threshold." /><figcaption>Verify the block with a pilot user after the threshold is exceeded.</figcaption></figure>
      <h2>Review Genie spend in system tables</h2>
      <p>Use <code>system.billing.usage</code> with <code>system.billing.list_prices</code> to review Genie usage by month, surface and user. The query below filters the usage records where the billing origin product is <code>GENIE</code>.</p>
      <pre><code>SELECT
  DATE_FORMAT(u.usage_date, 'yyyy-MM') AS usage_month,
  u.usage_metadata.genie.surface AS product,
  u.identity_metadata.run_as AS user,
  u.usage_unit,
  ROUND(SUM(u.usage_quantity), 2) AS total_dbus,
  COALESCE(ROUND(SUM(u.usage_quantity *
    COALESCE(p.pricing.effective_list.default, p.pricing.default)), 2), 0) AS total_cost,
  COALESCE(p.currency_code, 'USD') AS currency_code
FROM system.billing.usage u
LEFT JOIN system.billing.list_prices p
  ON u.sku_name = p.sku_name
  AND u.cloud = p.cloud
  AND u.usage_start_time &gt;= p.price_start_time
  AND (p.price_end_time IS NULL OR u.usage_start_time &lt; p.price_end_time)
WHERE u.billing_origin_product = 'GENIE'
GROUP BY ALL
ORDER BY usage_month DESC</code></pre>
      <p>This report is useful for monthly review and for identifying who needs a different threshold. Do not treat it as the enforcement signal. The budget block can take effect before the cost dashboard or system-table view reflects the latest usage.</p>
      <figure><img src="./images/genie-usage-query-results.jpg" width="720" height="110" alt="Databricks query results listing Genie usage, DBUs and costs by month and user." /><figcaption>Use the system-table query to review Genie usage and cost by product and user.</figcaption></figure>
      <h2>Automation needs validation</h2>
      <p>The Databricks CLI can list budgets and export an individual budget as JSON. This is useful for inventory and for preparing repeatable changes. Validate any update in a test account first. Preview-era CLI support may not include every configuration needed for Genie blocking, including the Unity AI Gateway resource type.</p>
      <pre><code>databricks account budgets list \
  --profile databricks-account

databricks account budgets get &lt;budget-id&gt; \
  --profile databricks-account \
  -o json &gt; genie-budget.json</code></pre>
      <h2>A safe operating pattern</h2>
      <ul><li>Set a modest shared limit for the first month of use.</li><li>Use a default per-user limit to prevent one account from consuming the full budget.</li><li>Give higher limits only to named roles, groups or people with a documented need.</li><li>Enable both notification and blocking actions.</li><li>Review blocked users and actual usage each month, then adjust limits deliberately.</li></ul>
      <figure><img src="./images/genie-budget-reached-notification.jpg" width="720" height="368" alt="Databricks budget notification and Genie message that the budget has been reached." /><figcaption>Keep alerts enabled so administrators know when a threshold blocks further Genie use.</figcaption></figure>
      <p>Budgets work best when they are part of an access and review process. A block prevents surprise spend. The usage report explains what happened and helps the team choose the next threshold.</p>
    </article>
  </main>
<?php include __DIR__ . '/../../includes/footer.php'; ?>
