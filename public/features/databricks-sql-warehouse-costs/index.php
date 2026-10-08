<?php
$page = [
  'title' => 'Databricks SQL Warehouse Pricing and Hourly Cost | FinOpsWay',
  'description' => 'Compare Databricks SQL warehouse pricing and hourly cost estimates by size. Review DBUs, scaling and auto-stop before choosing compute.',
  'path' => '/features/databricks-sql-warehouse-costs/',
  'og_title' => 'Databricks SQL Warehouse Pricing and Hourly Cost | FinOpsWay',
  'image' => 'https://finopsway.com/img/examples/databricks-sql-warehouse-costs.jpg',
  'image_alt' => 'Databricks SQL Warehouse Costs in FinOpsWay',
  'json_ld' => <<<'JSON'
{"@context": "https://schema.org", "@graph": [{"@type": "WebPage", "@id": "https://finopsway.com/features/databricks-sql-warehouse-costs/", "url": "https://finopsway.com/features/databricks-sql-warehouse-costs/", "name": "Databricks SQL Warehouse Pricing and Hourly Cost", "description": "Compare Databricks SQL warehouse pricing and hourly cost estimates by size. Review DBUs, scaling and auto-stop before choosing compute.", "inLanguage": "en", "isPartOf": {"@id": "https://finopsway.com/#website"}, "dateModified": "2026-10-07"}, {"@type": "BreadcrumbList", "itemListElement": [{"@type": "ListItem", "position": 1, "name": "Home", "item": "https://finopsway.com/"}, {"@type": "ListItem", "position": 2, "name": "Features", "item": "https://finopsway.com/features/"}, {"@type": "ListItem", "position": 3, "name": "Databricks SQL Warehouse Costs", "item": "https://finopsway.com/features/databricks-sql-warehouse-costs/"}]}]}
JSON,
];
include __DIR__ . '/../../includes/header.php';
?>
  <main id="main" class="article-page feature-page">
    <header class="article-hero"><p class="eyebrow">FinOpsWay features</p><h1>Databricks SQL Warehouse Costs</h1><p class="article-standfirst">A SQL warehouse runs SQL queries for analysis and dashboards. FinOpsWay adds hourly cost estimates beside warehouse sizes, so you can compare options before saving a configuration.</p></header>
    <div class="article-body">
      <figure><picture><img src="/img/examples/databricks-sql-warehouse-costs.jpg" width="1950" height="1180" loading="lazy" alt="Hourly estimates beside SQL warehouse sizes. Screenshot prices are examples, not current quotes." /></picture><figcaption>Hourly estimates beside SQL warehouse sizes. Screenshot prices are examples, not current quotes.</figcaption></figure>
      <h2 id="cost-context">How much does a SQL warehouse cost?</h2>
      <p>For a fixed configuration, a simple planning estimate is <strong>hourly cost × running hours</strong>. The result changes with warehouse type, size, scaling and applicable rates.</p><p>A DBU is a Databricks usage unit. The size selector shows DBUs per hour; FinOpsWay adds a money estimate. It is an estimate for that configuration, not a monthly bill.</p>
      <section class="pricing-in-feature" aria-labelledby="sql-rates-title">
        <h2 id="sql-rates-title">Published SQL warehouse rates</h2>
        <p>Reference Databricks list rates in USD per DBU. The selected cloud, region and contract can change the applicable price.</p>
        <div class="table-wrap"><table class="pricing-table" role="table">
          <thead role="rowgroup"><tr role="row"><th scope="col" role="columnheader">Compute model</th><th scope="col" role="columnheader">Cloud</th><th scope="col" role="columnheader">Cloud infrastructure</th><th scope="col" role="columnheader">Published compute rates</th></tr></thead>
          <tbody role="rowgroup">
            <tr role="row"><td role="cell">SQL Classic</td><td role="cell"><span class="pricing-cell-label" aria-hidden="true">Cloud</span>AWS, Azure, GCP</td><td role="cell"><span class="pricing-cell-label" aria-hidden="true">Cloud infrastructure</span>From about $1.25/hour for 2X-Small on AWS</td><td role="cell"><span class="pricing-cell-label" aria-hidden="true">Published compute rates</span>$0.22 / DBU</td></tr>
            <tr role="row"><td role="cell">SQL Pro</td><td role="cell"><span class="pricing-cell-label" aria-hidden="true">Cloud</span>AWS, Azure, GCP</td><td role="cell"><span class="pricing-cell-label" aria-hidden="true">Cloud infrastructure</span>From about $1.25/hour for 2X-Small on AWS</td><td role="cell"><span class="pricing-cell-label" aria-hidden="true">Published compute rates</span>$0.55 / DBU</td></tr>
            <tr role="row"><td role="cell">SQL Serverless</td><td role="cell"><span class="pricing-cell-label" aria-hidden="true">Cloud</span>AWS, Azure, GCP</td><td role="cell"><span class="pricing-cell-label" aria-hidden="true">Cloud infrastructure</span>Included in DBU rate</td><td role="cell"><span class="pricing-cell-label" aria-hidden="true">Published compute rates</span>$0.70 / DBU</td></tr>
            <tr role="row"><td role="cell">Lakehouse RT</td><td role="cell"><span class="pricing-cell-label" aria-hidden="true">Cloud</span>AWS, Azure, GCP</td><td role="cell"><span class="pricing-cell-label" aria-hidden="true">Cloud infrastructure</span>Included in DBU rate</td><td role="cell"><span class="pricing-cell-label" aria-hidden="true">Published compute rates</span><span class="pricing-promo-rate"><span class="pricing-promo-lamp" aria-hidden="true"></span>$0.55 / DBU</span></td></tr>
          </tbody>
        </table></div>
        <aside class="pricing-promo-note" aria-label="Lakehouse RT promotional pricing">
          <span class="pricing-promo-lamp" aria-hidden="true"></span>
          <div><h5>Promotion - Save 30% off the prices shown below until January 31, 2027</h5><p>Lakehouse RT costs $0.55 / DBU during the promotion. After it ends, the list price is about $0.79 / DBU.</p></div>
        </aside>
        <p class="table-note">AWS estimate assumes one 2X-Small cluster with two i3.2xlarge instances. Cloud instance pricing varies by cloud and region. Public rates checked Oct 6, 2026.</p>
        <p class="pricing-region-note">Prices shown for <span class="pricing-region">US East (AWS us-east-1)</span><a href="https://www.databricks.com/product/pricing/databricks-sql" target="_blank" rel="noopener">View official Databricks pricing</a>.</p>
      </section>
      <h2 id="workflow">How to compare warehouse sizes</h2>
      <ol class="feature-steps"><li><a href="/onboarding/">Connect FinOpsWay</a> and open a SQL warehouse’s settings.</li><li>Open the size selector and compare its hourly estimates.</li><li>Review scaling and Auto Stop before saving. Auto Stop shuts down an idle warehouse after the configured wait.</li></ol>
      <p class="feature-example"><strong>Example:</strong> The screenshot shows $2.80/hour for 2X-Small. At that example rate, 10 hours would be $28 if the configuration stayed fixed. Your region, rates and usage can differ.</p>

      <h2 id="questions">Common questions</h2>
      <h3>Does an idle warehouse still cost money?</h3><p>Yes, while it remains running. Auto Stop helps limit idle time. See <a href="https://docs.databricks.com/aws/en/compute/sql-warehouse/create" target="_blank" rel="noopener">Databricks warehouse settings</a> for the behavior of your warehouse type.</p><h3>Is the cheapest hourly size always cheapest overall?</h3><p>Not necessarily. A smaller warehouse may take longer to finish. Compare the same workload’s runtime and total cost. Shared warehouse cost also differs from the cost of one query.</p>
      <p class="feature-limits">Billing can lag by several hours. Check the reported period and freshness. <a href="/cost-methodology/">How FinOpsWay calculates costs</a>.</p>
      <p class="feature-sources">Reference: <a href="https://docs.databricks.com/aws/en/compute/sql-warehouse/warehouse-types" target="_blank" rel="noopener">Databricks SQL warehouse types</a>.</p>
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
    <aside class="feature-sidebar" aria-label="All FinOpsWay features"><p class="feature-sidebar-title">All costs features</p><nav><a href="/features/">Cost Banner</a><div class="feature-sidebar-group"><a href="/features/databricks-cluster-costs/">Clusters</a><div class="feature-sidebar-subnav"><a href="/features/databricks-serverless-cluster-costs/">Serverless Clusters</a><a href="/features/databricks-sql-warehouse-costs/" aria-current="page">SQL Warehouses</a><a href="/features/databricks-all-purpose-cluster-costs/">All-Purpose Clusters</a></div></div><div class="feature-sidebar-group"><a href="/features/databricks-job-costs/">Jobs and Pipelines</a><div class="feature-sidebar-subnav"><a href="/features/databricks-job-run-costs/">Job Runs</a></div></div><a href="/features/databricks-notebook-costs/">Notebooks</a><a href="/features/databricks-apps-costs/">Databricks Apps</a><a href="/features/databricks-lakebase-costs/">Lakebase (Postgres)</a><div class="feature-sidebar-group"><a href="/features/databricks-genie-agent-usage/">Genie</a><div class="feature-sidebar-subnav"><a href="/features/databricks-genie-agent-usage/">Genie Agents</a><a href="/features/databricks-genie-code-costs/">Genie Code</a></div></div><a href="/features/databricks-serving-endpoint-costs/">Serving Endpoint</a></nav></aside>
  </main>
<?php include __DIR__ . '/../../includes/footer.php'; ?>
