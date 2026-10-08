<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="color-scheme" content="only light" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Privacy Policy | FinOpsWay</title>
  <meta name="description" content="Learn how FinOpsWay handles Databricks cost data and workspace credentials. The browser extension has no backend or telemetry." />
  <link rel="icon" href="/favicon.ico" sizes="32x32" />
  <link rel="icon" href="/img/favicon.svg" type="image/svg+xml" />
  <link rel="apple-touch-icon" href="/apple-touch-icon.png" />
  <link rel="stylesheet" href="../styles.css?v=069" />
  <script src="../menu.js?v=006" defer></script>
  <script data-goatcounter="https://s.finopsway.com/count"
          async src="//s.finopsway.com/count.js"></script>
  <link rel="canonical" href="https://finopsway.com/privacy/" />
  <meta name="robots" content="index, follow, max-image-preview:large" />
  <meta property="og:type" content="website" />
  <meta property="og:site_name" content="FinOpsWay" />
  <meta property="og:locale" content="en_US" />
  <meta property="og:url" content="https://finopsway.com/privacy/" />
  <meta property="og:title" content="Privacy Policy | FinOpsWay" />
  <meta property="og:description" content="Learn how FinOpsWay handles Databricks cost data and workspace credentials. The browser extension has no backend or telemetry." />
  <meta property="og:image" content="https://finopsway.com/img/examples/workspace-cost-popover.jpg" />
  <meta property="og:image:alt" content="FinOpsWay showing Databricks costs inside the workspace" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Privacy Policy | FinOpsWay" />
  <meta name="twitter:description" content="Learn how FinOpsWay handles Databricks cost data and workspace credentials. The browser extension has no backend or telemetry." />
  <meta name="twitter:image" content="https://finopsway.com/img/examples/workspace-cost-popover.jpg" />
  <meta name="twitter:image:alt" content="FinOpsWay showing Databricks costs inside the workspace" />
</head>

<body>
<?php include __DIR__ . '/../includes/header.php'; ?>

  <main id="main" class="section prose">
    <h1 class="prose-title">Privacy policy</h1>
    <p class="prose-meta">
      <strong>finopsway-costs</strong> browser extension. Last updated 27 September 2026.
    </p>
    <p>
      This is the privacy policy for the finopsway-costs extension, as
      published in the
      <a href="https://chromewebstore.google.com/detail/finopsway-costs/lpfecokigmjdmdcfleiebiainkndhooi"
        target="_blank" rel="noopener">Chrome Web Store</a>
      and on
      <a href="https://addons.mozilla.org/firefox/addon/finopsway-costs/" target="_blank" rel="noopener">Firefox Add-ons</a>.
      It describes what the released extension does.
    </p>

    <h2>The short version</h2>
    <p>
      The extension has no backend. The only network requests it makes go to
      the Databricks workspace you are signed in to. We run no server, receive
      no data and cannot see what you query.
    </p>

    <h2>What the extension handles</h2>
    <p>
      <strong>A Databricks personal access token, if you choose token mode.</strong>
      It is stored with <code>chrome.storage.local</code>, keyed by workspace
      origin. That store is readable by this extension alone, is never synced to
      a browser account, and is cleared when you remove the token from the
      options page or uninstall the extension. In session mode no credential is
      stored: the extension reuses the workspace session you already have, and
      the CSRF token it needs is fetched per request and held in memory for the
      duration of that request.
    </p>
    <p>
      <strong>Your workspace account name, in session mode only.</strong> So
      that a query runs as you rather than as nobody, the extension asks the
      workspace who you are: it reads <code>/auth/session/info</code> and, where
      that answers with a numeric id alone,
      <code>/api/2.0/preview/scim/v2/Me</code>. The name it gets back (an email
      address) is sent to your own workspace as the identity the statement runs
      as. It is held in memory for that request, is never stored, and is never
      sent anywhere but the workspace it came from. Token mode looks nothing up:
      a personal access token is already an identity.
    </p>
    <p>
      <strong>Databricks billing usage records and SKU prices.</strong> The
      extension runs read-only SQL queries against the
      <code>system.billing</code> tables of your own workspace and keeps the
      rows in IndexedDB, in the workspace origin's own storage. This is a cache:
      it holds the history you configure on the options page
      (<strong>Days to keep</strong>, a year by default, which is everything
      Databricks itself retains, and never more), is pruned to that retention
      on every sync, and can be dropped at any time from the options page.
      The most recent five weeks are kept at the hourly grain the table has;
      anything older is folded to one row per day per SKU and compute
      resource, so the cache holds less detail about a day the further back
      it is, never more. A row carries the cost figures and the ids of whatever
      ran up the cost - workspace, cluster, warehouse, job and run, pipeline,
      app, serverless compute - and, for a job or a Databricks App, the name
      Databricks records for it, which is what lets the toolbar name what you
      are looking at instead of printing an id. Alongside the rows it keeps only
      its own bookkeeping: which day was last fetched, when, and how many rows
      landed.
      It contains only records the signed-in identity is already entitled to
      read.
    </p>
    <p>
      <strong>Compute machine hours, if you use the cloud cost view.</strong>
      To estimate what the machines under your clusters cost, the extension
      also reads <code>system.compute.node_timeline</code> - again read-only,
      again from your own workspace. It selects only the cluster id, the
      machine type, whether the node was a driver, the hour, and counts of
      minutes and instances. It does <em>not</em> read that table's
      utilisation, network or IP address columns. The result is aggregated to
      one row per cluster, machine type and hour before it is stored, and is
      replaced wholesale on each refresh rather than accumulated.
    </p>
    <p>
      <strong>Which cloud and region your workspace runs in.</strong> The
      extension runs <code>SELECT current_metastore()</code>, which returns a
      string such as <code>aws:us-east-2:&lt;id&gt;</code>. The cloud and the
      region select which machine price list to use; the metastore identifier
      in that string is stored alongside them but is not read by any feature,
      is never written to the console, and like everything else here never
      leaves your browser.
    </p>
    <p>
      <strong>Extension settings.</strong> Your warehouse choice, catalog,
      retention, display preferences, which cost figure the toolbar shows,
      whether each page integration is on, whether debug logging is on, and the
      period the toolbar is showing (a preset such as "month to date", or the
      dates you chose and what they are compared against), in
      <code>chrome.storage.local</code>.
    </p>
    <p>
      <strong>A little per-workspace bookkeeping</strong>, on the same store and
      keyed by the same origin: the workspace's warehouse list as the options
      page last read it (each one's id, name and running state), a record of the
      query currently in flight so another tab can pick it up instead of asking
      the warehouse twice, when the last sync finished and how many rows it
      returned, and a flag saying the extension is active on this workspace.
      Removing the workspace on the options page, or uninstalling, removes all
      of it.
    </p>
    <p>
      <strong>What the console page in front of you shows, where you switch a
      page integration on.</strong> The cost badges and the SQL warehouse hourly
      price are drawn inside Databricks' own pages, so they read those pages:
      the links a list row carries (which is where the cluster, job, pipeline,
      app or warehouse id comes from), the size and type a warehouse's row or
      form is set to, and the "N DBU / h" rate the console prints. That reading
      happens in your browser and goes nowhere; the badges are added to the page
      and nothing of the console's own content is edited. Each integration has
      its own switch on the options page, and there is a master switch for all
      of them.
    </p>

    <h2>Where data goes</h2>
    <p>
      Every network request the extension makes is to the Databricks workspace
      host you are visiting, matching <code>*.cloud.databricks.com</code> or
      <code>*.azuredatabricks.net</code>. There are no other hosts, and the
      extension declares no permission that would allow any. Your token is sent
      to that workspace and nowhere else. Credentials are keyed by workspace
      origin, so a token for one workspace is not reachable from another.
    </p>
    <p>
      <strong>The cloud cost view contacts no cloud provider.</strong> AWS and
      Azure machine list prices are downloaded by us in advance, from those
      providers' public price lists, and ship inside the extension package as
      static files. Estimating what a cluster costs is a lookup in a file
      already on your disk. Nothing about your clusters, your account or your
      region is sent to Amazon, Microsoft or anyone else, and the extension has
      no permission that would let it.
    </p>

    <h2>What we do not do</h2>
    <ul>
      <li>
        We do not collect, receive, store or transmit any of your data. There is
        no server to send it to.
      </li>
      <li>We do not sell or transfer your data to third parties.</li>
      <li>
        We do not use your data for anything unrelated to the extension's single
        purpose, which is displaying your Databricks spend.
      </li>
      <li>We do not use your data to determine creditworthiness or for lending.</li>
      <li>
        There is no analytics, telemetry, crash reporting or advertising of any
        kind.
      </li>
      <li>
        The extension writes nothing to Databricks. Its SQL only reads
        <code>system.billing</code> and <code>system.compute</code>, and only
        ever with <code>SELECT</code>.
      </li>
      <li>
        It does not read the content of your work. No notebook, query text,
        table, result or file is read at any point. The tables it queries
        describe cost and compute usage, not your data, and what the page
        integrations read off the page is the console's own labels and links,
        never anything of yours.
      </li>
    </ul>

    <h2>Logging</h2>
    <p>
      Debug logging is off by default, in released builds as in any other, and
      while it is off the extension writes no diagnostic traces at all. You can
      turn it on from the options page (<strong>Debug logging</strong>) when
      something needs diagnosing; leave it off otherwise, because the extension
      logs to the <em>page</em> console, which the workspace app can read and
      anyone looking over your shoulder can see. Even with it on, the access
      token and the CSRF token are never printed, and automated tests enforce
      that. What the trace does name is the authentication mode, your settings,
      the workspace id and, in session mode, the account the query runs as.
    </p>

    <h2>Removing your data</h2>
    <p>
      Uninstalling the extension removes the stored token, the settings and the
      bookkeeping above; <strong>Remove this workspace</strong> on the options
      page does the same for one workspace. The
      cached billing rows, machine hours and the cloud/region record live in
      the workspace origin's IndexedDB and are removed together by the
      <strong>Clear cached usage</strong> action on the options page, or by
      clearing site data for the workspace in your browser.
    </p>

    <h2>A note on token scope</h2>
    <p>
      A Databricks personal access token has the same permissions as your
      user account. It cannot be limited to <code>system.billing</code> alone.
      The extension only uses it for read-only billing queries, but you should
      treat it like any other workspace credential: prefer a short-lived
      token and revoke it in Databricks when you no longer need it. Session
      mode does not store a credential at all.
    </p>

    <h2 id="website">This website</h2>
    <p>
      finopsway.com counts page views with a self-hosted
      <a href="https://www.goatcounter.com/" target="_blank" rel="noopener">GoatCounter</a> instance. It sets
      no cookies and stores no personal data: only the page, the referrer, the
      browser and screen size, and the country derived from the IP address,
      which is not stored. This applies to the website only, never to the
      extension.
    </p>

    <h2 id="trademarks">Trademarks</h2>
    <p>
      finopsway-costs is an independent extension built by FinOpsWay. It is not
      affiliated with, endorsed or sponsored by Databricks, Inc.
    </p>
    <p>
      Databricks is a trademark of Databricks, Inc. Google Chrome and the
      Chrome Web Store are trademarks of Google LLC. Firefox and
      addons.mozilla.org are trademarks of the Mozilla Foundation. Microsoft
      Edge and Azure are trademarks of Microsoft Corporation. AWS is a
      trademark of Amazon.com, Inc. or its affiliates. These names are used only
      to describe what the extension works with. All trademarks remain the
      property of their respective owners.
    </p>

    <h2>Contact</h2>
    <p>
      Questions about this policy:
      <a href="mailto:mail@finopsway.com">mail@finopsway.com</a>.
    </p>
  </main>

<?php include __DIR__ . '/../includes/footer.php'; ?>
</body>

</html>
