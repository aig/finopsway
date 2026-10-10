<?php
$page = [
  'title' => 'Databricks Cluster Pricing and Cost Monitoring | FinOpsWay',
  'description' => 'Review Databricks cluster pricing, DBU usage, cloud compute and idle time. FinOpsWay shows cluster cost context in your workspace.',
  'path' => '/features/databricks-cluster-costs/',
  'og_title' => 'Databricks Cluster Pricing and Cost Monitoring | FinOpsWay',
  'image' => 'https://finopsway.com/img/examples/databricks-cluster-costs.jpg',
  'image_alt' => 'Databricks Cluster Costs in FinOpsWay',
  'json_ld' => <<<'JSON'
{"@context": "https://schema.org", "@graph": [{"@type": "WebPage", "@id": "https://finopsway.com/features/databricks-cluster-costs/", "url": "https://finopsway.com/features/databricks-cluster-costs/", "name": "Databricks Cluster Costs: DBUs and Cloud Compute", "description": "Understand Databricks cluster costs: DBU usage, cloud compute and idle time. See how FinOpsWay shows compute spending inside your workspace.", "inLanguage": "en", "isPartOf": {"@id": "https://finopsway.com/#website"}, "dateModified": "2026-10-06"}, {"@type": "BreadcrumbList", "itemListElement": [{"@type": "ListItem", "position": 1, "name": "Home", "item": "https://finopsway.com/"}, {"@type": "ListItem", "position": 2, "name": "Features", "item": "https://finopsway.com/features/"}, {"@type": "ListItem", "position": 3, "name": "Databricks Cluster Costs", "item": "https://finopsway.com/features/databricks-cluster-costs/"}]}]}
JSON,
];
include __DIR__ . '/../../includes/header.php';
?>
  <main id="main" class="article-page feature-page">
    <header class="article-hero"><p class="eyebrow">FinOpsWay features</p><h1>Databricks Cluster Costs</h1><p class="article-standfirst">A Databricks cluster is a group of machines that runs your code. Its cost depends on the compute you use and how long it runs. FinOpsWay brings cost information into the Databricks interface.</p></header>
    <div class="article-body">
      <figure><picture><img src="/img/examples/databricks-cluster-costs.jpg" width="1582" height="673" loading="lazy" alt="Compute view example: SQL warehouse totals and hourly estimates. Classic cluster charges depend on their own configuration." /></picture><figcaption>Compute view example: SQL warehouse totals and hourly estimates. Classic cluster charges depend on their own configuration.</figcaption></figure>
      <h2 id="cost-context">What makes up a Databricks cluster cost?</h2>
      <p>For classic compute, check two parts: <strong>Databricks usage + cloud machines</strong>. A DBU, or Databricks Unit, measures usage of the Databricks service. DBUs are multiplied by the applicable price; machine charges are separate.</p><p>FinOpsWay combines available Databricks usage with cloud machine estimates for AWS and Azure. It does not apply private contract discounts. See the <a href="/cost-methodology/">cost calculation method</a>.</p><p><strong>Classic all-purpose clusters and job clusters both add cloud infrastructure costs.</strong> The Databricks DBU rate is only part of the spend; the compute machines are billed separately by the cloud provider.</p>
      <section class="pricing-in-feature" aria-labelledby="cluster-rates-title">
        <h2 id="cluster-rates-title">Published compute rates</h2>
        <p>Public Databricks reference rates in USD per DBU. Cloud infrastructure is a rough on-demand cost per VM hour. The final rate depends on cloud, region, machine size, plan and contract.</p>
        <div class="table-wrap"><table class="pricing-table" role="table">
          <thead role="rowgroup"><tr role="row"><th scope="col" role="columnheader">Compute model</th><th scope="col" role="columnheader">Cloud</th><th scope="col" role="columnheader">Cloud infrastructure</th><th scope="col" role="columnheader">Published compute rates</th></tr></thead>
          <tbody role="rowgroup">
            <tr role="row"><td role="cell">Classic all-purpose</td><td role="cell"><span class="pricing-cell-label" aria-hidden="true">Cloud</span>AWS, Azure, GCP</td><td role="cell"><span class="pricing-cell-label" aria-hidden="true">Cloud infrastructure</span>≈ $0.10-$1.00+ / VM hour</td><td role="cell"><span class="pricing-cell-label" aria-hidden="true">Published compute rates</span>$0.55 / DBU</td></tr>
            <tr role="row"><td role="cell">Jobs Classic</td><td role="cell"><span class="pricing-cell-label" aria-hidden="true">Cloud</span>AWS, Azure, GCP</td><td role="cell"><span class="pricing-cell-label" aria-hidden="true">Cloud infrastructure</span>≈ $0.10-$1.00+ / VM hour</td><td role="cell"><span class="pricing-cell-label" aria-hidden="true">Published compute rates</span>$0.15 / DBU</td></tr>
            <tr role="row"><td role="cell"><a href="/features/databricks-sql-warehouse-costs/">SQL warehouses</a></td><td role="cell"><span class="pricing-cell-label" aria-hidden="true">Cloud</span>AWS, Azure, GCP</td><td role="cell"><span class="pricing-cell-label" aria-hidden="true">Cloud infrastructure</span>≈ $0.10-$1.00+ / VM hour</td><td role="cell"><span class="pricing-cell-label" aria-hidden="true">Published compute rates</span>$0.22 / DBU</td></tr>
            <tr role="row"><td role="cell">Serverless</td><td role="cell"><span class="pricing-cell-label" aria-hidden="true">Cloud</span>AWS, Azure, GCP</td><td role="cell"><span class="pricing-cell-label" aria-hidden="true">Cloud infrastructure</span>Included in DBU rate</td><td role="cell"><span class="pricing-cell-label" aria-hidden="true">Published compute rates</span>$0.75 / DBU</td></tr>
          </tbody>
        </table></div>
        <p class="table-note">Public reference rates checked Oct 6, 2026. Infrastructure amounts are approximate per VM hour. A cluster can use several VMs.</p>
        <p class="pricing-region-note">Prices shown for <span class="pricing-region">US East (AWS us-east-1)</span><a href="https://www.databricks.com/product/pricing/datascience-ml" target="_blank" rel="noopener">View official Databricks pricing</a>.</p>
      </section>
      <h2 id="workflow">How to check compute spending</h2>
      <ol class="feature-steps"><li>Connect FinOpsWay using the <a href="/onboarding/">setup guide</a>, then open Compute.</li><li>Choose the reporting period and check when billing was last updated.</li><li>Review the resource total, runtime and size. For shared compute, check what other work ran there.</li></ol>
      <p class="feature-example"><strong>Example:</strong> A cluster shared by two notebooks shows the resource cost. Giving the full amount to each notebook would count the same spend twice.</p>

      <h2 id="questions">Common questions</h2>
      <h3>Why does idle compute matter?</h3><p>A running resource can cost money while waiting for more work. Check the auto-termination setting and <a href="/guides/all-purpose-cluster-monitoring/">look for idle time on all-purpose clusters</a>.</p><h3>Why does my cloud bill differ?</h3><p>The extension estimates machine costs; it does not reproduce every invoice charge or discount. Databricks billing records alone do not include separately billed cloud infrastructure.</p>
      <p class="feature-limits">Billing can lag by several hours. Check the reported period and freshness. <a href="/cost-methodology/">How FinOpsWay calculates costs</a>.</p>
      <p class="feature-sources">Reference: <a href="https://www.databricks.com/blog/top-5-system-table-queries-understanding-your-databricks-costs" target="_blank" rel="noopener">Databricks billing and infrastructure costs</a>.</p>
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
    <?php include __DIR__ . '/../../includes/feature-sidebar.php'; ?>
  </main>
<?php include __DIR__ . '/../../includes/footer.php'; ?>
