<?php
$page = [
  'title' => 'Databricks Genie Code Pricing and DBU Usage | FinOpsWay',
  'description' => 'Review Databricks Genie Code pricing, DBU usage, the monthly free allowance and billed usage in one workspace view.',
  'path' => '/features/databricks-genie-code-costs/',
  'og_title' => 'Databricks Genie Code Pricing and DBU Usage | FinOpsWay',
  'json_ld' => <<<'JSON'
{"@context":"https://schema.org","@graph":[{"@type":"WebPage","@id":"https://finopsway.com/features/databricks-genie-code-costs/","url":"https://finopsway.com/features/databricks-genie-code-costs/","name":"Databricks Genie Code Costs and DBU Usage","description":"Understand Genie Code DBU usage, the monthly free allowance and billed usage in Databricks.","inLanguage":"en","isPartOf":{"@id":"https://finopsway.com/#website"},"dateModified":"2026-10-06"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://finopsway.com/"},{"@type":"ListItem","position":2,"name":"Features","item":"https://finopsway.com/features/"},{"@type":"ListItem","position":3,"name":"Databricks Genie Code Costs","item":"https://finopsway.com/features/databricks-genie-code-costs/"}]}]}
JSON,
];
include __DIR__ . '/../../includes/header.php';
?>
  <main id="main" class="article-page feature-page">
    <header class="article-hero"><p class="eyebrow">FinOpsWay features</p><h1>Databricks Genie Code Costs</h1><p class="article-standfirst">Genie Code usage is metered in DBUs. Genie Code support is coming soon in FinOpsWay. This page explains the billing information it will show.</p></header>
    <div class="article-body">
      <div class="feature-image-placeholder" role="img" aria-label="Genie Code cost coming soon in FinOpsWay">coming soon in FinOpsWay</div>
      <h2 id="cost-context">How is Genie Code billed?</h2>
      <p>Each identified user receives 150 free DBUs each month. Usage beyond that allowance is billed. Service principals do not receive the allowance.</p>
      <section class="pricing-in-feature" aria-labelledby="genie-code-rates-title">
        <h2 id="genie-code-rates-title">Genie Code billing reference</h2>
        <p>Genie Code is an AI coding assistant for data engineers and data scientists. The table shows the monthly allowance, the paid rate and separately billed compute.</p>
        <div class="table-wrap"><table class="pricing-table" role="table"><thead role="rowgroup"><tr role="row"><th scope="col" role="columnheader">Usage</th><th scope="col" role="columnheader">Billing detail</th><th scope="col" role="columnheader">Reference rate</th></tr></thead><tbody role="rowgroup"><tr role="row"><td role="cell">User usage each month</td><td role="cell"><span class="pricing-cell-label" aria-hidden="true">Billing detail</span>150 DBUs per user included</td><td role="cell"><span class="pricing-cell-label" aria-hidden="true">Reference rate</span>$0 within allowance</td></tr><tr role="row"><td role="cell">Usage beyond the allowance</td><td role="cell"><span class="pricing-cell-label" aria-hidden="true">Billing detail</span>Serverless Real-Time Inference</td><td role="cell"><span class="pricing-cell-label" aria-hidden="true">Reference rate</span><span class="pricing-promo-rate"><span class="pricing-promo-lamp" aria-hidden="true"></span>$0.070 / DBU</span></td></tr><tr role="row"><td role="cell">Underlying compute</td><td role="cell"><span class="pricing-cell-label" aria-hidden="true">Billing detail</span>SQL Warehouse and other query compute</td><td role="cell"><span class="pricing-cell-label" aria-hidden="true">Reference rate</span>Billed separately</td></tr><tr role="row"><td role="cell">Service principal usage</td><td role="cell"><span class="pricing-cell-label" aria-hidden="true">Billing detail</span>No free monthly allowance</td><td role="cell"><span class="pricing-cell-label" aria-hidden="true">Reference rate</span><span class="pricing-promo-rate"><span class="pricing-promo-lamp" aria-hidden="true"></span>$0.070 / DBU</span></td></tr></tbody></table></div>
        <aside class="pricing-promo-note" aria-label="Genie Code promotional pricing"><span class="pricing-promo-lamp" aria-hidden="true"></span><div><h5>Promotion: save 25% off the price shown below until January 31, 2027</h5><p>A 25% promotional discount applies to billed Genie Code usage. Databricks applies the discount in DBU metering.</p></div></aside>
        <p class="table-note"><sup>(2)</sup> 150 DBUs = $10.50. Free usage appears as <code>GENIE_FREE_USAGE</code> and has no list price.</p>
        <p class="pricing-region-note">Prices shown for <span class="pricing-region">US East (AWS us-east-1)</span><a href="https://www.databricks.com/product/pricing/genie" target="_blank" rel="noopener">View official Databricks pricing</a>.</p>
      </section>

      <p class="feature-coming-soon">Coming soon in FinOpsWay</p>
      <aside class="feature-advice" aria-labelledby="genie-code-budget-advice-title"><span class="feature-advice-icon" aria-hidden="true">!</span><div><h3 id="genie-code-budget-advice-title">Set a Genie spending limit</h3><p>Set shared and per-user thresholds before paid usage starts. <a href="/guides/databricks-genie-cost-control/">Read the guide to Genie budgets and usage blocks</a>.</p></div></aside>

      <h2 id="workflow">How to review Genie Code usage</h2>
      <ol class="feature-steps"><li>Open the billing system tables for your account.</li><li>Filter records where <code>billing_origin_product = 'GENIE'</code>.</li><li>Use <code>usage_metadata.genie.surface</code> to isolate <code>GENIE_CODE</code>.</li><li>Compare free and billed DBUs before estimating a cost.</li></ol>
      <h2 id="questions">Common questions</h2>
      <h3>Why do free DBUs appear in billing data?</h3><p>Databricks records the free allowance in billing data. Free rows use <code>GENIE_FREE_USAGE</code>, which does not have a list price.</p>
      <h3>Does a Genie budget include query compute?</h3><p>No. A Genie budget tracks LLM usage. Compute used to run queries, such as a SQL warehouse, is billed separately.</p>
      <p class="feature-limits">Billing data updates every few hours. Check the reported period and freshness. <a href="/cost-methodology/">How FinOpsWay calculates costs</a>.</p>
    </div>
    <aside class="feature-sidebar" aria-label="All FinOpsWay features"><p class="feature-sidebar-title">All costs features</p><nav><a href="/features/">Cost Banner</a><div class="feature-sidebar-group"><a href="/features/databricks-cluster-costs/">Clusters</a><div class="feature-sidebar-subnav"><a href="/features/databricks-serverless-cluster-costs/">Serverless Clusters</a><a href="/features/databricks-sql-warehouse-costs/">SQL Warehouses</a><a href="/features/databricks-all-purpose-cluster-costs/">All-Purpose Clusters</a></div></div><div class="feature-sidebar-group"><a href="/features/databricks-job-costs/">Jobs and Pipelines</a><div class="feature-sidebar-subnav"><a href="/features/databricks-job-run-costs/">Job Runs</a></div></div><a href="/features/databricks-notebook-costs/">Notebooks</a><a href="/features/databricks-apps-costs/">Databricks Apps</a><a href="/features/databricks-lakebase-costs/">Lakebase (Postgres)</a><div class="feature-sidebar-group"><a href="/features/databricks-genie-agent-usage/">Genie</a><div class="feature-sidebar-subnav"><a href="/features/databricks-genie-agent-usage/">Genie Agents</a><a href="/features/databricks-genie-code-costs/" aria-current="page">Genie Code</a></div></div><a href="/features/databricks-serving-endpoint-costs/">Serving Endpoint</a></nav></aside>
  </main>
<?php include __DIR__ . '/../../includes/footer.php'; ?>
