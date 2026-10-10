<?php $currentFeaturePath = $page['path'] ?? ''; ?>
<aside class="feature-sidebar" aria-label="All FinOpsWay features">
  <p class="feature-sidebar-title">All costs features</p>
  <nav>
    <a href="/features/"<?= $currentFeaturePath === '/features/' ? ' aria-current="page"' : '' ?>>Cost Banner</a>
    <div class="feature-sidebar-group">
      <a href="/features/databricks-cluster-costs/"<?= $currentFeaturePath === '/features/databricks-cluster-costs/' ? ' aria-current="page"' : '' ?>>Clusters</a>
      <div class="feature-sidebar-subnav">
        <a href="/features/databricks-serverless-cluster-costs/"<?= $currentFeaturePath === '/features/databricks-serverless-cluster-costs/' ? ' aria-current="page"' : '' ?>>Serverless Clusters</a>
        <a href="/features/databricks-sql-warehouse-costs/"<?= $currentFeaturePath === '/features/databricks-sql-warehouse-costs/' ? ' aria-current="page"' : '' ?>>SQL Warehouses</a>
        <a href="/features/databricks-all-purpose-cluster-costs/"<?= $currentFeaturePath === '/features/databricks-all-purpose-cluster-costs/' ? ' aria-current="page"' : '' ?>>All-Purpose Clusters</a>
      </div>
    </div>
    <div class="feature-sidebar-group">
      <a href="/features/databricks-job-costs/"<?= $currentFeaturePath === '/features/databricks-job-costs/' ? ' aria-current="page"' : '' ?>>Jobs and Pipelines</a>
      <div class="feature-sidebar-subnav">
        <a href="/features/databricks-job-run-costs/"<?= $currentFeaturePath === '/features/databricks-job-run-costs/' ? ' aria-current="page"' : '' ?>>Job Runs</a>
      </div>
    </div>
    <a href="/features/databricks-notebook-costs/"<?= $currentFeaturePath === '/features/databricks-notebook-costs/' ? ' aria-current="page"' : '' ?>>Notebooks</a>
    <a href="/features/databricks-apps-costs/"<?= $currentFeaturePath === '/features/databricks-apps-costs/' ? ' aria-current="page"' : '' ?>>Databricks Apps</a>
    <a href="/features/databricks-lakebase-costs/"<?= $currentFeaturePath === '/features/databricks-lakebase-costs/' ? ' aria-current="page"' : '' ?>>Lakebase (Postgres)</a>
    <div class="feature-sidebar-group">
      <a href="/features/databricks-genie-agent-usage/">Genie</a>
      <div class="feature-sidebar-subnav">
        <a href="/features/databricks-genie-agent-usage/"<?= $currentFeaturePath === '/features/databricks-genie-agent-usage/' ? ' aria-current="page"' : '' ?>>Genie Agents</a>
        <a href="/features/databricks-genie-code-costs/"<?= $currentFeaturePath === '/features/databricks-genie-code-costs/' ? ' aria-current="page"' : '' ?>>Genie Code</a>
        <a href="/features/databricks-genie-one-costs/"<?= $currentFeaturePath === '/features/databricks-genie-one-costs/' ? ' aria-current="page"' : '' ?>>Genie One</a>
        <a href="/features/databricks-genie-ontology-costs/"<?= $currentFeaturePath === '/features/databricks-genie-ontology-costs/' ? ' aria-current="page"' : '' ?>>Genie Ontology</a>
      </div>
    </div>
    <a href="/features/databricks-serving-endpoint-costs/"<?= $currentFeaturePath === '/features/databricks-serving-endpoint-costs/' ? ' aria-current="page"' : '' ?>>Serving Endpoint</a>
  </nav>
</aside>
