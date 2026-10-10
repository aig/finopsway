<?php
$page = [
  'title' => 'Databricks Notebook Cost Monitoring | FinOpsWay',
  'description' => 'Monitor Databricks notebook cost beside notebook names. Compare experiment spend and see how serverless billing differs from shared cluster costs.',
  'path' => '/features/databricks-notebook-costs/',
  'og_title' => 'Databricks Notebook Cost Monitoring | FinOpsWay',
  'image' => 'https://finopsway.com/img/examples/databricks-notebook-costs.jpg',
  'image_alt' => 'Databricks Notebook Costs in FinOpsWay',
  'json_ld' => <<<'JSON'
{"@context": "https://schema.org", "@graph": [{"@type": "WebPage", "@id": "https://finopsway.com/features/databricks-notebook-costs/", "url": "https://finopsway.com/features/databricks-notebook-costs/", "name": "Databricks Notebook Costs: Track Compute Spending", "description": "See Databricks notebook costs beside notebook names. Learn how serverless billing differs from shared cluster costs and how to compare experiments.", "inLanguage": "en", "isPartOf": {"@id": "https://finopsway.com/#website"}, "dateModified": "2026-10-06"}, {"@type": "BreadcrumbList", "itemListElement": [{"@type": "ListItem", "position": 1, "name": "Home", "item": "https://finopsway.com/"}, {"@type": "ListItem", "position": 2, "name": "Features", "item": "https://finopsway.com/features/"}, {"@type": "ListItem", "position": 3, "name": "Databricks Notebook Costs", "item": "https://finopsway.com/features/databricks-notebook-costs/"}]}]}
JSON,
];
include __DIR__ . '/../../includes/header.php';
?>
  <main id="main" class="article-page feature-page">
    <header class="article-hero"><p class="eyebrow">FinOpsWay features</p><h1>Databricks Notebook Costs</h1><p class="article-standfirst">A notebook contains code and results; compute runs the code. FinOpsWay shows notebook cost badges in the workspace list, helping you identify which analysis or experiment to review.</p></header>
    <div class="article-body">
      <figure><picture><img src="/img/examples/databricks-notebook-costs.jpg" width="837" height="240" loading="lazy" alt="Cost badges beside notebook names in the workspace list." /></picture><figcaption>Cost badges beside notebook names in the workspace list.</figcaption></figure>
      <h2 id="cost-context">Where do notebook costs come from?</h2>
      <p>Check the compute used to run the notebook. With serverless compute, Databricks manages the machines and billing records can identify the notebook. With a shared all-purpose cluster, several notebooks can use the same machines.</p><p>Databricks explains how to find notebook usage in its <a href="https://docs.databricks.com/aws/en/admin/system-tables/serverless-billing" target="_blank" rel="noopener">serverless billing documentation</a>. Shared cluster spending needs an allocation rule before you assign it to individual users or notebooks.</p>
      <section class="pricing-in-feature" aria-labelledby="notebook-rates-title">
        <h2 id="notebook-rates-title">Reference rates for notebook compute</h2>
        <p>Notebook compute follows the selected compute model. These Databricks list rates are in USD per DBU.</p>
        <div class="table-wrap"><table class="pricing-table" role="table">
          <thead role="rowgroup"><tr role="row"><th scope="col" role="columnheader">Compute model</th><th scope="col" role="columnheader">Cloud</th><th scope="col" role="columnheader">Cloud infrastructure</th><th scope="col" role="columnheader">Published compute rates</th></tr></thead>
          <tbody role="rowgroup">
            <tr role="row"><td role="cell">Classic all-purpose cluster</td><td role="cell"><span class="pricing-cell-label" aria-hidden="true">Cloud</span>AWS, Azure, GCP</td><td role="cell"><span class="pricing-cell-label" aria-hidden="true">Cloud infrastructure</span>≈ $0.10-$1.00+ / VM hour</td><td role="cell"><span class="pricing-cell-label" aria-hidden="true">Published compute rates</span>$0.55 / DBU</td></tr>
            <tr role="row"><td role="cell">Classic job cluster</td><td role="cell"><span class="pricing-cell-label" aria-hidden="true">Cloud</span>AWS, Azure, GCP</td><td role="cell"><span class="pricing-cell-label" aria-hidden="true">Cloud infrastructure</span>≈ $0.10-$1.00+ / VM hour</td><td role="cell"><span class="pricing-cell-label" aria-hidden="true">Published compute rates</span>$0.15 / DBU</td></tr>
            <tr role="row"><td role="cell">Databricks SQL warehouse</td><td role="cell"><span class="pricing-cell-label" aria-hidden="true">Cloud</span>AWS, Azure, GCP</td><td role="cell"><span class="pricing-cell-label" aria-hidden="true">Cloud infrastructure</span>≈ $0.10-$1.00+ / VM hour</td><td role="cell"><span class="pricing-cell-label" aria-hidden="true">Published compute rates</span>$0.22 / DBU</td></tr>
            <tr role="row"><td role="cell">Serverless SQL</td><td role="cell"><span class="pricing-cell-label" aria-hidden="true">Cloud</span>AWS, Azure, GCP</td><td role="cell"><span class="pricing-cell-label" aria-hidden="true">Cloud infrastructure</span>Included in DBU rate</td><td role="cell"><span class="pricing-cell-label" aria-hidden="true">Published compute rates</span>$0.22 / DBU</td></tr>
            <tr role="row"><td role="cell">Serverless compute</td><td role="cell"><span class="pricing-cell-label" aria-hidden="true">Cloud</span>AWS, Azure, GCP</td><td role="cell"><span class="pricing-cell-label" aria-hidden="true">Cloud infrastructure</span>Included in DBU rate</td><td role="cell"><span class="pricing-cell-label" aria-hidden="true">Published compute rates</span>$0.75 / DBU</td></tr>
          </tbody>
        </table></div>
        <p class="table-note">Public reference rates checked Oct 6, 2026. Shared clusters can run several notebooks, so these are compute rates, not a per-notebook price.</p>
        <p class="pricing-region-note">Prices shown for <span class="pricing-region">US East (AWS us-east-1)</span><a href="https://www.databricks.com/product/pricing/datascience-ml" target="_blank" rel="noopener">View official Databricks pricing</a>.</p>
      </section>
      <h2 id="workflow">How to review notebook spending</h2>
      <ol class="feature-steps"><li><a href="/onboarding/">Connect FinOpsWay</a> and open the workspace list containing your notebooks.</li><li>Find the cost badge beside the notebook name and check the reporting period.</li><li>Open the notebook to review its compute and workload. Compare experiments with similar data and complete billing.</li></ol>
      <p class="feature-example"><strong>Example:</strong> Running an experiment ten times can raise its total even if one execution is unchanged. Check how often you ran it before concluding that a code edit made it less efficient.</p>

      <h2 id="questions">Common questions</h2>
      <h3>Does the badge show the cost of each cell?</h3><p>No. A notebook total is not a bill for each cell or SQL statement. Do not treat it as exact per-cell attribution.</p><h3>Why can a notebook and a cluster show different costs?</h3><p>A cluster can also run other notebooks or jobs. Its total covers the compute resource, while notebook attribution depends on the available usage records.</p>
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
    <?php include __DIR__ . '/../../includes/feature-sidebar.php'; ?>
  </main>
<?php include __DIR__ . '/../../includes/footer.php'; ?>
