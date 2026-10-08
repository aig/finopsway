<?php
$page = [
  'title' => 'Databricks Lakebase Pricing, Compute and Storage Costs | FinOpsWay',
  'description' => 'Review Databricks Lakebase pricing for compute, storage and sync. See database and branch costs, plus hourly estimates in Lakebase settings.',
  'path' => '/features/databricks-lakebase-costs/',
  'og_title' => 'Databricks Lakebase Pricing, Compute and Storage Costs | FinOpsWay',
  'image' => 'https://finopsway.com/img/examples/lakebase-branches-costs.jpg',
  'image_alt' => 'Databricks Lakebase Costs in FinOpsWay',
  'json_ld' => <<<'JSON'
{"@context": "https://schema.org", "@graph": [{"@type": "WebPage", "@id": "https://finopsway.com/features/databricks-lakebase-costs/", "url": "https://finopsway.com/features/databricks-lakebase-costs/", "name": "Databricks Lakebase Costs: Database and Branch Spend", "description": "Understand Databricks Lakebase compute, storage and sync costs. See database and branch spending, plus hourly estimates in Lakebase settings.", "inLanguage": "en", "isPartOf": {"@id": "https://finopsway.com/#website"}, "dateModified": "2026-10-06"}, {"@type": "BreadcrumbList", "itemListElement": [{"@type": "ListItem", "position": 1, "name": "Home", "item": "https://finopsway.com/"}, {"@type": "ListItem", "position": 2, "name": "Features", "item": "https://finopsway.com/features/"}, {"@type": "ListItem", "position": 3, "name": "Databricks Lakebase Costs", "item": "https://finopsway.com/features/databricks-lakebase-costs/"}]}]}
JSON,
];
include __DIR__ . '/../../includes/header.php';
?>
  <main id="main" class="article-page feature-page">
    <header class="article-hero"><p class="eyebrow">FinOpsWay features</p><h1>Databricks Lakebase Costs</h1><p class="article-standfirst">Lakebase is Databricks’ managed PostgreSQL database for applications. FinOpsWay shows its database and branch costs, plus hourly compute estimates in settings.</p></header>
    <div class="article-body">
      <figure>
        <img src="/img/examples/lakebase_main_page.png" width="1462" height="534" loading="lazy" alt="Lakebase Projects with FinOpsWay cost badges beside flowapp and databricksadmin, plus the reporting period in the toolbar." />
        <figcaption>See each project’s reported cost beside its name.</figcaption>
      </figure>
      <h2 id="cost-context">What makes up Lakebase costs?</h2>
      <ul><li><strong>Compute:</strong> resources that run the database.</li><li><strong>Storage:</strong> the database data you retain.</li><li><strong>Sync pipelines:</strong> extra compute when synced tables copy data into Lakebase.</li></ul><p>These are separate cost components. Databricks explains them in its <a href="https://www.databricks.com/blog/practical-guide-cost-optimization-lakebase-postgres" target="_blank" rel="noopener">Lakebase cost guide</a>. Check the <a href="https://www.databricks.com/product/pricing/lakebase" target="_blank" rel="noopener">current Lakebase pricing</a> for your cloud and region.</p>
      <section class="pricing-in-feature" aria-labelledby="price-components-title">
        <h2 id="price-components-title">Lakebase rates by cloud</h2>
        <p>Compare the published reference rates shown for each cloud. The exact price can vary by region, plan and promotion.</p>
        <h3>Compute</h3>
        <div class="table-wrap">
          <table class="pricing-table" role="table">
            <thead role="rowgroup"><tr role="row"><th scope="col" role="columnheader">Compute rate</th><th scope="col" role="columnheader">AWS</th><th scope="col" role="columnheader">Azure</th><th scope="col" role="columnheader">GCP</th></tr></thead>
            <tbody role="rowgroup">
              <tr role="row"><td role="cell">Autoscaling compute, per CU-hour</td><td role="cell"><span class="pricing-cell-label" aria-hidden="true">AWS</span>$0.092</td><td role="cell"><span class="pricing-cell-label" aria-hidden="true">Azure</span>$0.111</td><td role="cell"><span class="pricing-cell-label" aria-hidden="true">GCP</span>$0.104</td></tr>
              <tr role="row"><td role="cell">Always-On baseline, per CU-hour</td><td role="cell"><span class="pricing-cell-label" aria-hidden="true">AWS</span>$0.069</td><td role="cell"><span class="pricing-cell-label" aria-hidden="true">Azure</span>$0.083</td><td role="cell"><span class="pricing-cell-label" aria-hidden="true">GCP</span>$0.078</td></tr>
            </tbody>
          </table>
        </div>
        <h3>Storage</h3>
        <div class="table-wrap">
          <table class="pricing-table" role="table">
            <thead role="rowgroup"><tr role="row"><th scope="col" role="columnheader">Storage component</th><th scope="col" role="columnheader">AWS</th><th scope="col" role="columnheader">Azure</th><th scope="col" role="columnheader">GCP</th></tr></thead>
            <tbody role="rowgroup">
              <tr role="row"><td role="cell">Database storage: fault-tolerant distributed storage that scales with the capacity needed by your database</td><td role="cell"><span class="pricing-cell-label" aria-hidden="true">AWS</span>$0.345/GB-month</td><td role="cell"><span class="pricing-cell-label" aria-hidden="true">Azure</span>$0.390/GB-month</td><td role="cell"><span class="pricing-cell-label" aria-hidden="true">GCP</span>$0.345/GB-month</td></tr>
              <tr role="row"><td role="cell">PITR storage: retains historical data to enable recovery to any prior point within your retention window</td><td role="cell"><span class="pricing-cell-label" aria-hidden="true">AWS</span>$0.200/GB-month</td><td role="cell"><span class="pricing-cell-label" aria-hidden="true">Azure</span>$0.200/GB-month</td><td role="cell"><span class="pricing-cell-label" aria-hidden="true">GCP</span>$0.200/GB-month</td></tr>
              <tr role="row"><td role="cell">Snapshots: on-demand and automated database snapshots for backup and recovery</td><td role="cell"><span class="pricing-cell-label" aria-hidden="true">AWS</span>$0.090/GB-month</td><td role="cell"><span class="pricing-cell-label" aria-hidden="true">Azure</span>$0.090/GB-month</td><td role="cell"><span class="pricing-cell-label" aria-hidden="true">GCP</span>$0.090/GB-month</td></tr>
            </tbody>
          </table>
        </div>
        <p class="table-note">Promotions, contract terms and region selection can change the final rate.</p>
        <p class="pricing-region-note">Prices shown for <span class="pricing-region">US East (AWS us-east-1)</span><a href="https://www.databricks.com/product/pricing/lakebase" target="_blank" rel="noopener">View official Databricks pricing</a>.</p>
        <p class="feature-cta"><strong>Stay on FinOpsWay:</strong> <a href="/cost-methodology/">See how cost is calculated</a> or <a href="/onboarding/">Connect your workspace</a>.</p>
      </section>
      <h2 id="workflow">How to check database and branch costs</h2>
      <ol class="feature-steps"><li><a href="/onboarding/">Connect FinOpsWay</a> and open Lakebase Projects.</li><li>Read a project’s cost, then open its branches. A branch is an isolated database environment, often used for testing.</li><li>Compare branch costs over the same period. Check billing freshness before investigating a recent change.</li></ol>
      <figure>
        <img src="/img/examples/lakebase_branches.png" width="1212" height="374" loading="lazy" alt="Lakebase branches showing $0.95 for production and less than $0.01 for test, beside their compute ranges." />
        <figcaption>Open a project to compare production and test branch costs.</figcaption>
      </figure>
      <p class="feature-example"><strong>Example:</strong> The screenshot shows $0.95 for a production branch and less than $0.01 for a test branch. These are costs for the selected period, not hourly prices.</p>
      <h2 id="create-project">Check the estimate before creating a project</h2>
      <p>FinOpsWay shows an hourly compute estimate in the Create project dialog. Review it before creating the database. Screenshot prices are examples, not current quotes.</p>
      <figure>
        <img src="/img/examples/lakebase_new.png" width="1080" height="691" loading="lazy" alt="Lakebase Create project dialog with a FinOpsWay estimate of $0.37 to $0.74 per hour beside the production branch configuration." />
        <figcaption>Preview the hourly compute range before creating the project.</figcaption>
      </figure>
      <h2 id="settings">Hourly estimates in Lakebase settings</h2><p>A CU, or <a href="https://docs.databricks.com/aws/en/oltp/projects/manage-computes" target="_blank" rel="noopener">compute unit</a>, describes compute size. FinOpsWay shows hourly estimates beside the minimum and maximum CU settings. This range is not a forecast of actual monthly usage.</p><figure>
        <a href="/img/examples/lakebase_settings.png" target="_blank" rel="noopener" aria-label="View full Lakebase compute settings, including scale-to-zero (opens in a new tab)">
          <picture><img src="/img/examples/lakebase-autoscaling-costs.jpg" width="1109" height="342" loading="lazy" alt="Lakebase autoscaling settings with hourly estimates beside the minimum 0.5 CU and maximum 1 CU." /></picture>
        </a>
        <figcaption>Hourly estimates beside the compute range. Select the image to see the full settings.</figcaption>
      </figure>
      <h2 id="questions">Common questions</h2>
      <h3>Does scale-to-zero remove every Lakebase charge?</h3><p>No. Suspending compute does not remove stored data. Storage and separate sync workloads can still contribute to the total.</p><h3>Does the database badge include sync pipeline costs?</h3><p>Do not assume so. Review the pipeline separately when calculating the full cost of the application.</p>
      <p class="feature-limits">Billing can lag by several hours. Check the reported period and freshness. <a href="/cost-methodology/">How FinOpsWay calculates costs</a>.</p>

      <section class="feature-download" aria-labelledby="feature-download-title">
        <h2 id="feature-download-title">Add FinOpsWay to your browser</h2>
        <p>Install the free extension from your browser’s store. No FinOpsWay account is required.</p>
      <div class="download-grid">
        <a class="download-card" href="https://chromewebstore.google.com/detail/finopsway-costs/lpfecokigmjdmdcfleiebiainkndhooi" target="_blank" rel="noopener">
          <span class="browser-icon"><img src="/img/google_chrome.svg" alt="" /></span>
          <span class="download-card-copy">
            <span class="download-card-label">Available for</span>
            <strong>Google Chrome</strong>
            <span class="download-card-action">Get the extension <span aria-hidden="true">↗</span></span>
          </span>
        </a>
        <a class="download-card" href="https://chromewebstore.google.com/detail/finopsway-costs/lpfecokigmjdmdcfleiebiainkndhooi" target="_blank" rel="noopener">
          <span class="browser-icon"><img src="/img/edge.svg" alt="" /></span>
          <span class="download-card-copy">
            <span class="download-card-label">Available for</span>
            <strong>Microsoft Edge</strong>
            <span class="download-card-action">Get the extension <span aria-hidden="true">↗</span></span>
          </span>
        </a>
        <a class="download-card" href="https://addons.mozilla.org/firefox/addon/finopsway-costs/" target="_blank" rel="noopener">
          <span class="browser-icon"><img src="/img/firefox.svg" alt="" /></span>
          <span class="download-card-copy">
            <span class="download-card-label">Available for</span>
            <strong>Mozilla Firefox</strong>
            <span class="download-card-action">Get the extension <span aria-hidden="true">↗</span></span>
          </span>
        </a>
      </div>
        <p class="note">Microsoft Edge uses the Chrome Web Store listing.</p>
      </section>
    </div>
    <aside class="feature-sidebar" aria-label="All FinOpsWay features"><p class="feature-sidebar-title">All costs features</p><nav><a href="/features/">Cost Banner</a><div class="feature-sidebar-group"><a href="/features/databricks-cluster-costs/">Clusters</a><div class="feature-sidebar-subnav"><a href="/features/databricks-serverless-cluster-costs/">Serverless Clusters</a><a href="/features/databricks-sql-warehouse-costs/">SQL Warehouses</a><a href="/features/databricks-all-purpose-cluster-costs/">All-Purpose Clusters</a></div></div><div class="feature-sidebar-group"><a href="/features/databricks-job-costs/">Jobs and Pipelines</a><div class="feature-sidebar-subnav"><a href="/features/databricks-job-run-costs/">Job Runs</a></div></div><a href="/features/databricks-notebook-costs/">Notebooks</a><a href="/features/databricks-apps-costs/">Databricks Apps</a><a href="/features/databricks-lakebase-costs/" aria-current="page">Lakebase (Postgres)</a><div class="feature-sidebar-group"><a href="/features/databricks-genie-agent-usage/">Genie</a><div class="feature-sidebar-subnav"><a href="/features/databricks-genie-agent-usage/">Genie Agents</a><a href="/features/databricks-genie-code-costs/">Genie Code</a></div></div><a href="/features/databricks-serving-endpoint-costs/">Serving Endpoint</a></nav></aside>
  </main>
<?php include __DIR__ . '/../../includes/footer.php'; ?>
