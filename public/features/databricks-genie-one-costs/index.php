<?php
$page = [
  'title' => 'Databricks Genie One Costs and DBU Usage | FinOpsWay',
  'description' => 'Review Databricks Genie One DBU usage, free promotional usage and billing context in one workspace view.',
  'path' => '/features/databricks-genie-one-costs/',
  'og_title' => 'Databricks Genie One Costs and DBU Usage | FinOpsWay',
  'json_ld' => <<<'JSON'
{"@context":"https://schema.org","@graph":[{"@type":"WebPage","@id":"https://finopsway.com/features/databricks-genie-one-costs/","url":"https://finopsway.com/features/databricks-genie-one-costs/","name":"Databricks Genie One Costs and DBU Usage","description":"Understand Genie One DBU usage, free promotional usage and billing context in Databricks.","inLanguage":"en","isPartOf":{"@id":"https://finopsway.com/#website"},"dateModified":"2026-10-10"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://finopsway.com/"},{"@type":"ListItem","position":2,"name":"Features","item":"https://finopsway.com/features/"},{"@type":"ListItem","position":3,"name":"Databricks Genie One Costs","item":"https://finopsway.com/features/databricks-genie-one-costs/"}]}]}
JSON,
];
include __DIR__ . '/../../includes/header.php';
?>
  <main id="main" class="article-page feature-page">
    <header class="article-hero"><p class="eyebrow">FinOpsWay features</p><h1>Databricks Genie One Costs</h1><p class="article-standfirst">Genie One usage is metered in DBUs. FinOpsWay support is coming soon. This page explains the free promotion and billing context it will show.</p></header>
    <div class="article-body">
      <div class="feature-image-placeholder" role="img" aria-label="Genie One cost coming soon in FinOpsWay">coming soon in FinOpsWay</div>
      <h2 id="cost-context">Is Genie One usage free?</h2>
      <p>Through January 31, 2027, Databricks lists Genie One usage by users as free. Service principal usage is excluded from the promotion and billed.</p>
      <section class="pricing-in-feature" aria-labelledby="genie-one-rates-title">
        <h2 id="genie-one-rates-title">Genie One billing reference</h2>
        <p>The table separates free user usage from billed service principal usage and related workload compute.</p>
        <div class="table-wrap"><table class="pricing-table" role="table"><thead role="rowgroup"><tr role="row"><th scope="col">Usage</th><th scope="col">Billing detail</th><th scope="col">Reference rate</th></tr></thead><tbody role="rowgroup"><tr role="row"><td>User usage through January 31, 2027</td><td><span class="pricing-cell-label" aria-hidden="true">Billing detail</span><code>GENIE_FREE_USAGE</code></td><td><span class="pricing-cell-label" aria-hidden="true">Reference rate</span>$0 during the promotion</td></tr><tr role="row"><td>Service principal usage</td><td><span class="pricing-cell-label" aria-hidden="true">Billing detail</span>Serverless Real-Time Inference</td><td><span class="pricing-cell-label" aria-hidden="true">Reference rate</span><span class="pricing-promo-rate"><span class="pricing-promo-lamp" aria-hidden="true"></span>$0.070 / DBU</span></td></tr><tr role="row"><td>Underlying compute</td><td><span class="pricing-cell-label" aria-hidden="true">Billing detail</span>SQL Warehouse and other query compute</td><td><span class="pricing-cell-label" aria-hidden="true">Reference rate</span>Billed separately</td></tr><tr role="row"><td>User usage after the promotion</td><td><span class="pricing-cell-label" aria-hidden="true">Billing detail</span>Serverless Real-Time Inference</td><td><span class="pricing-cell-label" aria-hidden="true">Reference rate</span><span class="pricing-promo-rate"><span class="pricing-promo-lamp" aria-hidden="true"></span>$0.070 / DBU</span></td></tr></tbody></table></div>
        <aside class="pricing-promo-note" aria-label="Genie One promotional pricing"><span class="pricing-promo-lamp" aria-hidden="true"></span><div><h5>PROMOTION - FREE (1) UNTIL JAN 31, 2027</h5><p>Genie One usage by users is free during the promotion. It appears in billing data under <code>GENIE_FREE_USAGE</code> and has no list price. Service principals are excluded and billed. A 25% promotional discount applies to billed Genie usage.</p></div></aside>
        <p class="table-note"><sup>(1)</sup> Free Genie One usage does not have a list price. The billed reference rate matches Genie Code.</p>
        <p class="pricing-region-note">Prices shown for <span class="pricing-region">US East (AWS us-east-1)</span><a href="https://docs.databricks.com/aws/en/genie/monitor-cost" target="_blank" rel="noopener">View official Databricks Genie billing documentation</a>.</p>
      </section>

      <p class="feature-coming-soon">Coming soon in FinOpsWay</p>
      <aside class="feature-advice" aria-labelledby="genie-one-budget-advice-title"><span class="feature-advice-icon" aria-hidden="true">!</span><div><h3 id="genie-one-budget-advice-title">Review usage during the promotion</h3><p>Free usage does not have a list price. Use Genie Code usage or the estimated equivalent cost in billing data to set a future baseline. <a href="/guides/databricks-genie-cost-control/">Read the guide to Genie budgets and usage blocks</a>.</p></div></aside>

      <h2 id="workflow">How to review Genie One usage</h2>
      <ol class="feature-steps"><li>Open the billing system tables for your account.</li><li>Filter records where <code>billing_origin_product = 'GENIE'</code>.</li><li>Use <code>usage_metadata.genie.surface</code> to isolate <code>GENIE_ONE</code>.</li><li>Compare free and billed DBUs before estimating a cost.</li></ol>
      <h2 id="questions">Common questions</h2>
      <h3>Why do free DBUs appear in billing data?</h3><p>Databricks records free usage in billing data. The <code>GENIE_FREE_USAGE</code> SKU tracks consumption but has no list price.</p>
      <h3>Does the promotion apply to service principals?</h3><p>No. Service principal usage is excluded from the promotion and billed.</p>
      <p class="feature-limits">Billing data updates every few hours. Check the reported period and freshness. <a href="/cost-methodology/">How FinOpsWay calculates costs</a>.</p>
    </div>
    <?php include __DIR__ . '/../../includes/feature-sidebar.php'; ?>
  </main>
<?php include __DIR__ . '/../../includes/footer.php'; ?>
