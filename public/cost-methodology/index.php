<?php
$page = [
  'title' => 'How FinOpsWay Calculates Databricks Costs',
  'description' => 'Learn how FinOpsWay combines Databricks usage and cloud infrastructure estimates, and understand current limitations.',
  'path' => '/cost-methodology/',
];
include __DIR__ . '/../includes/header.php';
?>
  <main id="main" class="section prose methodology-page">
    <p class="eyebrow">Cost methodology</p><h1 class="prose-title">How FinOpsWay calculates Databricks costs</h1>
    <p class="security-lead">FinOpsWay combines Databricks usage cost with an estimate of cloud infrastructure cost, then shows the result in the Databricks interface.</p>
    <div class="cost-formula"><strong>Databricks DBU cost</strong><span>+</span><strong>Cloud infrastructure cost</strong><span>→</span><strong>Displayed cost</strong></div>
    <h2>What is included</h2><ul><li><strong>Databricks DBU:</strong> usage and SKU price information available in your workspace billing data.</li><li><strong>Cloud infrastructure:</strong> an estimate based on compute machine hours and the cloud and region reported by your workspace.</li></ul>
    <p>FinOpsWay supports cloud infrastructure estimates for Azure and AWS. The cloud price lists are bundled with the extension, so calculating this estimate does not contact a cloud provider.</p>
    <h2>What the number means</h2><p>The displayed cost is a visibility signal based on the billing information the configured Databricks identity can read. It helps connect compute decisions with cost where work happens. It is not an invoice or a replacement for your cloud or Databricks bill.</p>
    <h2>Known limitations</h2><ul><li><strong>Contract and private discounts:</strong> not yet reflected in the displayed cost.</li><li><strong>Shared compute:</strong> a cost can be associated with the compute resource that incurred it. When several users or workloads share that resource, the displayed figure is not a complete attribution model for each user or workload.</li><li><strong>Billing delay:</strong> Databricks billing data can arrive after the usage occurred. FinOpsWay marks incomplete recent periods so they are easier to interpret.</li></ul>
    <h2>Why a job cost and a cluster cost can differ</h2><p>A job can run on a cluster that also runs other work. A cluster cost describes the compute resource. A job cost depends on the usage records available for that job. When compute is shared, no simple total can fairly assign every infrastructure dollar to one user or job without an allocation policy.</p>
    <h2>Use the number with context</h2><p>Compare similar periods, check data freshness and use the cost view alongside your workload context. For governance or chargeback, apply your organization's allocation rules and reconcile against official billing.</p>
    <p>Questions about the calculation? <a href="mailto:mail@finopsway.com">Contact us</a>. See also <a href="../security/">Security &amp; Privacy</a>.</p>
  </main>
<?php include __DIR__ . '/../includes/footer.php'; ?>
