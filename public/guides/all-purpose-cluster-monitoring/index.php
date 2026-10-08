<?php
$page = [
  'title' => 'Monitor All-Purpose Cluster Idle Time | FinOpsWay',
  'description' => 'Use Databricks cluster events to find all-purpose clusters that spend too long waiting for auto termination.',
  'path' => '/guides/all-purpose-cluster-monitoring/',
  'og_type' => 'article',
  'og_title' => 'Databricks Cost Optimization: Monitor All-Purpose Cluster Idle Time',
  'og_description' => 'Use Databricks cluster events to find scheduled jobs on all-purpose clusters, expose idle timeout cost and prevent the pattern with policies.',
  'twitter_description' => 'Find scheduled jobs on all-purpose clusters, expose idle timeout cost and prevent the pattern with policies.',
  'image' => 'https://finopsway.com/guides/all-purpose-cluster-monitoring/images/original_1.jpg',
  'image_alt' => 'Databricks all-purpose cluster cost comparison and timeline',
  'published' => '2026-02-02',
  'modified' => '2026-10-05',
  'author' => 'https://www.linkedin.com/in/protmaks/',
  'json_ld' => <<<'JSON'
{"@context":"https://schema.org","@type":"Article","mainEntityOfPage":{"@type":"WebPage","@id":"https://finopsway.com/guides/all-purpose-cluster-monitoring/"},"headline":"Databricks cost optimization: monitoring all-purpose clusters with the API","description":"Use Databricks cluster events to find scheduled jobs on all-purpose clusters, expose idle timeout cost and prevent the pattern with policies.","image":"https://finopsway.com/guides/all-purpose-cluster-monitoring/images/original_1.jpg","datePublished":"2026-02-02","dateModified":"2026-10-05","author":{"@type":"Person","name":"Maksim Pachkouski","url":"https://www.linkedin.com/in/protmaks/"},"publisher":{"@type":"Organization","name":"FinOpsWay","url":"https://finopsway.com/"},"articleSection":"Databricks cost optimization","keywords":"Databricks cost optimization, all-purpose clusters, jobs compute, cluster events API, auto termination"}
JSON,
];
include __DIR__ . '/../../includes/header.php';
?>
  <main id="main" class="article-page">
    <header class="article-hero"><p class="eyebrow">Cluster monitoring</p><h1>Databricks cost optimization: monitoring all-purpose clusters with the API</h1><p class="article-standfirst">A short scheduled run can leave an all-purpose cluster waiting for auto termination. Cluster events make that idle time visible.</p><div class="author-row"><img src="../../img/maksim-profile.jpg" width="96" height="96" alt="Maksim Pachkouski" /><div><p><strong>Maksim Pachkouski</strong></p><p>Databricks MVP · February 2, 2026 · 5 min read</p><p><a href="https://medium.com/databrickscommunity/databricks-cost-optimization-api-monitoring-of-all-purpose-clusters-b7ad7ddd4702" target="_blank" rel="noopener">Original publication on Medium ↗</a></p></div></div></header>
    <article class="article-body">
      <p>All-purpose compute is useful for notebooks, exploration and interactive work. It is often a poor fit for scheduled scripts. A job can complete in a few minutes, then the cluster can stay on until its auto termination timer expires.</p>
      <p>The cluster page shows whether compute is running or stopped. It does not clearly separate useful work from the waiting period before shutdown. This makes idle cost hard to spot across a workspace.</p>
      <h2>The problem: development compute becomes scheduled production compute</h2>
      <p>A developer often creates a script on an all-purpose cluster, tests it there, then schedules the same script against that existing cluster. The first run succeeds, so the configuration can look correct. But each later run keeps the higher-cost interactive cluster alive until its auto termination period ends.</p>
      <p>This is an easy mistake to repeat. The job owner may not own the cluster settings, and the platform team may see only total uptime. The result is a scheduled workload paying for interactive compute and idle waiting time.</p>
      <h2>What to look for</h2>
      <div class="article-comparison"><div><p class="eyebrow">All-purpose compute</p><strong>Built for interactive work</strong><p>It stays available after activity stops, based on the configured auto termination period.</p></div><div><p class="eyebrow">Jobs compute</p><strong>Built for scheduled work</strong><p>It is created for the run and released when the task completes.</p></div></div>
      <p>A common pattern is simple: a developer tests a script on an all-purpose cluster, then schedules that same script on the same cluster. A six minute run followed by a thirty minute timeout pays for thirty six minutes of cluster time. The wait can cost far more than the task itself.</p>
      <h2>Use cluster events for a current report</h2>
      <p>System tables can be useful for historical analysis, but their data can arrive later. For a near-current report, query the Databricks Clusters API. List the workspace clusters, then request each cluster's start and termination events for the reporting window.</p>
      <figure><img src="./images/original-2.jpeg" width="933" height="316" alt="Databricks all-purpose cluster event log with starting and terminating events." /><figcaption>The event log provides the source events for the report.</figcaption></figure>
      <pre><code>report_time_zone = "America/New_York"
report_days = 10

clusters = workspace_client.clusters.list()
events = workspace_client.clusters.events(...)</code></pre>
      <p>Pair each startup with the later termination event. Convert the timestamps to the report time zone. The resulting intervals show when each all-purpose cluster was available. Group them by date, team or cluster owner so that the people who can change the setting can see the result.</p>
      <figure><img src="./images/original-3.jpeg" width="1174" height="257" alt="Original cluster timeline showing terminated and waiting states across four all-purpose clusters." /><figcaption>Review each cluster timeline to distinguish terminated time from waiting time.</figcaption></figure>
      <figure><img src="./images/original-4.jpeg" width="1179" height="272" alt="Original cluster timeline showing details for an auto termination waiting interval." /><figcaption>The hover detail identifies the reason and duration of an idle wait.</figcaption></figure>
      <figure><img src="./images/original-1.jpeg" width="1179" height="800" alt="Original cost comparison showing an all-purpose cluster timeline and jobs compute alternative." /><figcaption>Original illustration: a short run can be followed by a much longer paid waiting period.</figcaption></figure>
      <h2>Prevent the mistake with policies</h2>
      <p>Monitoring finds existing waste. Policies stop the same pattern from returning. Use workspace policies to prohibit scheduling jobs on all-purpose clusters, and require jobs compute for scheduled production work. Keep all-purpose compute available for the interactive work it is designed for.</p>
      <p>A clear policy makes the preferred path the easy path: developers can still explore and debug, while scheduled tasks use isolated compute that ends with the run. Document the exception process for workloads that genuinely need a shared interactive cluster.</p>
      <h2>Turn the report into action</h2>
      <ul><li>Move repeatable scheduled work to jobs compute where it fits.</li><li>Use policies to block new scheduled jobs on all-purpose clusters.</li><li>Reduce overly long auto termination values on all-purpose clusters.</li><li>Disable old schedules and review clusters with repeated idle intervals.</li><li>Share the report with cluster owners before making workspace-wide changes.</li></ul>
      <p>In one set of projects, this view exposed short tasks followed by long idle windows, inactive schedules and clusters with an excessive timeout. Addressing those cases reduced compute cost by 20 to 30 percent per month.</p>
      <aside class="article-notebook"><p class="eyebrow">Source notebook</p><div><div><strong>API monitoring of all-purpose clusters</strong><p>Get the complete Python notebook, including the cluster event query and visualization.</p></div><a class="notebook-link" href="https://github.com/protmaks/Databricks/blob/main/API%20%26%20SDK/Monitoring/API%20monitoring%20of%20All-purpose%20clusters.py" target="_blank" rel="noopener">Open on GitHub <span aria-hidden="true">↗</span></a></div></aside>
    </article>
  </main>
<?php include __DIR__ . '/../../includes/footer.php'; ?>
