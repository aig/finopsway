<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="color-scheme" content="only light" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>FinOpsWay - FinOps for Databricks | Track Databricks Costs</title>
  <meta name="description" content="Track Databricks costs in your workspace with FinOpsWay, a free FinOps browser extension. View spending for jobs, clusters and pipelines in context." />
  <link rel="icon" href="/favicon.ico" sizes="32x32" />
  <link rel="icon" href="/img/favicon.svg" type="image/svg+xml" />
  <link rel="apple-touch-icon" href="/apple-touch-icon.png" />
  <link rel="stylesheet" href="./styles.css?v=069" />
  <script src="./menu.js?v=006" defer></script>
  <script data-goatcounter="https://s.finopsway.com/count"
          async src="//s.finopsway.com/count.js"></script>
  <link rel="canonical" href="https://finopsway.com/" />
  <meta name="robots" content="index, follow, max-image-preview:large" />
  <meta property="og:type" content="website" />
  <meta property="og:site_name" content="FinOpsWay" />
  <meta property="og:locale" content="en_US" />
  <meta property="og:url" content="https://finopsway.com/" />
  <meta property="og:title" content="FinOpsWay - FinOps for Databricks | Track Databricks Costs" />
  <meta property="og:description" content="Track Databricks costs in your workspace with FinOpsWay, a free FinOps browser extension. View spending for jobs, clusters and pipelines in context." />
  <meta property="og:image" content="https://finopsway.com/img/examples/workspace-cost-popover.jpg" />
  <meta property="og:image:alt" content="FinOpsWay showing Databricks costs inside the workspace" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="FinOpsWay - FinOps for Databricks | Track Databricks Costs" />
  <meta name="twitter:description" content="Track Databricks costs in your workspace with FinOpsWay, a free FinOps browser extension. View spending for jobs, clusters and pipelines in context." />
  <meta name="twitter:image" content="https://finopsway.com/img/examples/workspace-cost-popover.jpg" />
  <meta name="twitter:image:alt" content="FinOpsWay showing Databricks costs inside the workspace" />
  <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "WebSite",
      "@id": "https://finopsway.com/#website",
      "url": "https://finopsway.com/",
      "name": "FinOpsWay",
      "inLanguage": "en"
    },
    {
      "@type": "SoftwareApplication",
      "@id": "https://finopsway.com/#application",
      "name": "FinOpsWay",
      "url": "https://finopsway.com/",
      "description": "Track Databricks costs in your workspace with FinOpsWay, a free FinOps browser extension. View spending for jobs, clusters and pipelines in context.",
      "applicationCategory": "BusinessApplication",
      "operatingSystem": "Windows, macOS, Linux",
      "softwareRequirements": "Google Chrome, Microsoft Edge or Mozilla Firefox; a Databricks workspace",
      "isAccessibleForFree": true,
      "offers": {
        "@type": "Offer",
        "price": "0",
        "priceCurrency": "USD"
      },
      "screenshot": "https://finopsway.com/img/examples/workspace-cost-popover.jpg",
      "featureList": [
        "Databricks cost visibility in workspace navigation",
        "Cost context for jobs, clusters and pipelines",
        "Cost breakdown by SKU",
        "Billing data freshness indicators"
      ]
    }
  ]
}
  </script>
</head>

<body>
<?php $compact = false; include __DIR__ . '/includes/header.php'; ?>


  <main id="main">

    <div class="hero">
      <div class="hero-row">
        <div class="hero_left">
          <h1><span class="finopsway-title">FinOpsWay</span>: Track Databricks costs in the <img class="wm-s databricks-mark" src="./img/databricks_logo.png" width="1420" height="224" alt="Databricks" /> interface</h1>
          <p class="standfirst">
            FinOpsWay is a free FinOps <a href="./features/">browser extension for Databricks</a>. Track Databricks costs directly in your workspace, alongside your jobs, clusters, and pipelines.
          </p>
          <p class="standfirst">
            Costs are not real time. Databricks publishes billing data with a delay of at least a few hours.
          </p>
        </div>
        <div class="hero_right">
          <figure class="shot">
            <picture>
              <img src="./img/examples/workspace-cost-popover.jpg" width="1415" height="1111" fetchpriority="high"
                alt="A Databricks workspace home page. In the top navigation, a chip reads: workspace $3.13, 24 h to 18:00, 4 h ago. Open below it, a panel with 24 h, 7 d and 14 d tabs, a bar chart whose last hours are hatched, a table of cost per SKU against the previous 24 hours, and a note that the window ends at 18:00 because billing has not reported the four hours since." />
            </picture>
            <b class="pin" style="left: 22.5%; top: 4.1%" aria-hidden="true">1</b>
            <b class="pin" style="left: 64.0%; top: 5.7%" aria-hidden="true">2</b>
            <b class="pin" style="left: 90.1%; top: 18.4%" aria-hidden="true">3</b>
            <b class="pin" style="left: 65.3%; top: 61%" aria-hidden="true">4</b>
          </figure>
        </div>
      </div>
      <section class="point_section" id="see">
        <ol class="callouts">
          <li>
            <b>Widget on every page</b>
            Cost display within your workspace
          </li>
          <li>
            <b>Aggregate by period</b>
            Data coverage: 24 h, 7 d, months, custom
          </li>
          <li>
            <b>Diagram</b>
            Visual graph for the selected period
          </li>
          <li>
            <b>Division into SKUs</b>
            Detailed SKU information
          </li>
        </ol>
      </section>
    </div>

    <section class="section" id="download">
      <h2>Download the FinOps extension for Databricks</h2>
      <p class="lead">
        FinOpsWay is available in the Chrome Web Store and on Firefox Add-ons. It is free and does not need an account.
        <a href="./onboarding/">Read the setup guide for creating and configuring a cluster</a>.
      </p>
      <div class="download-grid">
        <a class="download-card" href="https://chromewebstore.google.com/detail/finopsway-costs/lpfecokigmjdmdcfleiebiainkndhooi"
          target="_blank" rel="noopener">
          <span class="browser-icon"><img src="./img/google_chrome.svg" alt="" /></span>
          <span class="download-card-copy">
            <span class="download-card-label">Available for</span>
            <strong>Google Chrome</strong>
            <span class="download-card-action">Get the extension <span aria-hidden="true">↗</span></span>
          </span>
        </a>
        <a class="download-card" href="https://chromewebstore.google.com/detail/finopsway-costs/lpfecokigmjdmdcfleiebiainkndhooi"
          target="_blank" rel="noopener">
          <span class="browser-icon"><img src="./img/edge.svg" alt="" /></span>
          <span class="download-card-copy">
            <span class="download-card-label">Available for</span>
            <strong>Microsoft Edge</strong>
            <span class="download-card-action">Get the extension <span aria-hidden="true">↗</span></span>
          </span>
        </a>
        <a class="download-card" href="https://addons.mozilla.org/firefox/addon/finopsway-costs/" target="_blank" rel="noopener">
          <span class="browser-icon"><img src="./img/firefox.svg" alt="" /></span>
          <span class="download-card-copy">
            <span class="download-card-label">Available for</span>
            <strong>Mozilla Firefox</strong>
            <span class="download-card-action">Get the extension <span aria-hidden="true">↗</span></span>
          </span>
        </a>
      </div>
      <p class="note">
        Edge users install from the Chrome Web Store. After installing, open the extension's options page, choose your workspace and paste a personal access token. Browser session mode is available for testing, but use it at your own risk: it is not recommended for production. Open any Databricks page and the cost chip will appear in the top navigation.
        Questions? <a href="mailto:mail@finopsway.com">Email us</a>.
      </p>
    </section>

    <section class="section examples-section" aria-labelledby="examples-title" id="whatelse">
      <div class="examples-route">
      <div class="examples-intro">
        <h2 id="examples-title">Databricks cost monitoring features</h2>
        <p>FinOpsWay places cost context next to the Databricks resources you use every day. <a href="./features/">Explore All costs features</a>.</p>
      </div>
      <div class="examples-stories">
        <article class="example-story">
          <div class="example-copy">
            <p class="example-kicker"><span class="example-number">01</span> Clusters</p>
            <h3><a href="./features/databricks-cluster-costs/">Databricks Cluster Costs</a></h3>
            <p>Keep cost context close while you browse the clusters in your workspace.</p>
          </div>
          <div class="example-visual">
            <picture>
              <img src="./img/examples/databricks-cluster-costs.jpg" width="1582" height="673" alt="FinOpsWay cost totals and hourly estimates on the Databricks SQL warehouses page." loading="lazy" />
            </picture>
          </div>
        </article>
        <article class="example-story">
          <div class="example-copy">
            <p class="example-kicker"><span class="example-number">02</span> Jobs and pipelines</p>
            <h3><a href="./features/databricks-job-costs/">Databricks Job and Pipeline Costs</a></h3>
            <p>See cost information alongside your jobs and pipelines, without leaving Databricks.</p>
          </div>
          <div class="example-visual">
            <picture>
              <img src="./img/examples/databricks-jobs-and-pipelines-costs.jpg" width="1985" height="874" alt="FinOpsWay cost information on the Databricks jobs and pipelines page." loading="lazy" />
            </picture>
          </div>
        </article>
        <article class="example-story">
          <div class="example-copy">
            <p class="example-kicker"><span class="example-number">03</span> Job runs</p>
            <h3><a href="./features/databricks-job-run-costs/">Databricks Job Run Costs</a></h3>
            <p>Bring cost into the picture when you review a job run, right where you already work.</p>
          </div>
          <div class="example-visual">
            <picture>
              <img src="./img/examples/databricks-job-run-costs.jpg" width="1950" height="1180" alt="FinOpsWay cost information on the Databricks job runs page." loading="lazy" />
            </picture>
          </div>
        </article>
        <article class="example-story">
          <div class="example-copy">
            <p class="example-kicker"><span class="example-number">04</span> SQL warehouse setup</p>
            <h3><a href="./features/databricks-sql-warehouse-costs/">Databricks SQL Warehouse Costs</a></h3>
            <p>Compare hourly cost estimates beside SQL warehouse sizes before choosing compute.</p>
          </div>
          <div class="example-visual">
            <picture>
              <img src="./img/examples/databricks-sql-warehouse-costs.jpg" width="1950" height="1180" alt="FinOpsWay hourly cost estimates in the SQL warehouse size selector." loading="lazy" />
            </picture>
          </div>
        </article>
        <article class="example-story">
          <div class="example-copy">
            <p class="example-kicker"><span class="example-number">05</span> Notebooks</p>
            <h3><a href="./features/databricks-notebook-costs/">Databricks Notebook Costs</a></h3>
            <p>See cost badges beside notebook names and review the compute behind your analysis.</p>
          </div>
          <div class="example-visual">
            <picture>
              <img src="./img/examples/databricks-notebook-costs.jpg" width="837" height="240" alt="FinOpsWay cost badges beside notebook names in the workspace list." loading="lazy" />
            </picture>
          </div>
        </article>
        <article class="example-story">
          <div class="example-copy">
            <p class="example-kicker"><span class="example-number">06</span> Databricks Apps</p>
            <h3><a href="./features/databricks-apps-costs/">Databricks Apps Costs</a></h3>
            <p>Bring cost context to Databricks Apps, without leaving the place you manage them.</p>
          </div>
          <div class="example-visual">
            <picture>
              <img src="./img/examples/databricks-apps-costs.jpg" width="1586" height="587" alt="FinOpsWay cost information on the Databricks Apps page." loading="lazy" />
            </picture>
          </div>
        </article>
        <article class="example-story">
          <div class="example-copy">
            <p class="example-kicker"><span class="example-number">07</span> Lakebase</p>
            <h3><a href="./features/databricks-lakebase-costs/">Databricks Lakebase Costs</a></h3>
            <p>See the cost of a Lakebase database, not only as a whole but also for each individual branch.</p>
          </div>
          <div class="example-visual">
            <picture>
              <img src="./img/examples/lakebase-branches-costs.jpg" width="1462" height="898" alt="FinOpsWay cost information for a Lakebase database and its branches." loading="lazy" />
            </picture>
          </div>
        </article>
        <article class="example-story">
          <div class="example-copy">
            <p class="example-kicker"><span class="example-number">08</span> Lakebase settings</p>
            <h3><a href="./features/databricks-lakebase-costs/#settings">Lakebase Costs in Database Settings</a></h3>
            <p>Review Lakebase cost information directly alongside the database settings you manage.</p>
          </div>
          <div class="example-visual">
            <picture>
              <img src="./img/examples/lakebase-autoscaling-costs.jpg" width="1109" height="342" alt="FinOpsWay cost information on the Databricks Lakebase settings page." loading="lazy" />
            </picture>
          </div>
        </article>
        <article class="example-story">
          <div class="example-copy">
            <p class="example-kicker"><span class="example-number">09</span> Genie Agents</p>
            <h3><a href="./features/databricks-genie-agent-usage/">Databricks Genie Agent Costs</a></h3>
            <p>See DBU usage alongside the Genie Agents you build and manage in Databricks. Genie Agents usage by users is free through January 31, 2027; service principal usage is billed.</p>
          </div>
          <div class="example-visual">
            <picture>
              <img src="./img/examples/genie-agent-costs.jpg" width="1324" height="665" alt="FinOpsWay cost information on the Databricks Genie Agents page." loading="lazy" />
            </picture>
          </div>
        </article>
      </div>
        <svg class="examples-road" viewBox="0 0 1000 3700" preserveAspectRatio="none" aria-hidden="true" focusable="false">
          <defs>
            <path id="examples-road-path" d="M 400,0 C 400,100 670,70 740,160 C 960,420 40,420 260,740 S 960,940 740,1210 S 40,1420 260,1760 S 960,1960 740,2140 S 40,2320 260,2500 S 960,2680 740,2900 S 40,3100 260,3300 S 960,3500 740,3700" />
          </defs>
          <use class="examples-road-edge" href="#examples-road-path" />
          <use class="examples-road-surface" href="#examples-road-path" />
          <use class="examples-road-markings" href="#examples-road-path" />
        </svg>
      </div>
    </section>

    <section class="section why-section" id="why" aria-labelledby="why-title">
      <div class="why-intro">
        <p class="why-kicker">Why FinOpsWay</p>
        <h2 id="why-title">Databricks shows admins where the money went. FinOpsWay shows engineers what it costs while they decide.</h2>
        <p class="why-lead">
          Databricks Governance Hub (Beta) gives account and workspace admins one place to
          review spend by product, workspace and tag. That answers the question
          after the bill. But the cluster was sized, the job was scheduled and
          the query shipped by people who never opened that page.
        </p>
        <p class="why-lead">
          FinOpsWay takes the same billing data to them, on the page where they
          are already working.
        </p>
      </div>

      <div class="cards" id="governance-hub">
        <figure class="card why-compare">
          <picture>
            <img class="governance-hub-card-image" src="./img/examples/governance-hub-costs.jpg" width="1996" height="1144" loading="lazy" alt="Databricks Governance Hub Cost page showing spend metrics, a spend trend, top spending groups, tagged spend, budgets, and cost recommendations." />
          </picture>
          <figcaption>
            <p class="why-compare-label">Governance Hub</p>
            <h3>Where did the money go?</h3>
            <p>One view for admins. <a href="https://docs.databricks.com/aws/en/admin/governance-hub/cost" target="_blank" rel="noopener">Read the Databricks docs <span aria-hidden="true">↗</span></a></p>
          </figcaption>
        </figure>
        <figure class="card why-compare">
          <picture>
            <img class="governance-hub-card-image" src="./img/examples/finopsway-cost-overview.jpg" width="1996" height="1144" loading="lazy" alt="FinOpsWay cost information displayed inside a Databricks workspace." />
          </picture>
          <figcaption>
            <p class="why-compare-label">FinOpsWay</p>
            <h3>What does this cost?</h3>
            <p>On every page. <a href="/features/">See every page it covers <span aria-hidden="true">↑</span></a></p>
          </figcaption>
        </figure>
      </div>

    </section>

    <section class="section authors-section" id="authors" aria-labelledby="authors-title">
      <h2 id="authors-title">Built by Databricks community experts</h2>
      <div class="cards contacts-grid">
        <article class="card contact-card creator-card">
          <div class="contact-copy">
          <div class="contact-details">
          <h3>Ilya Aniskovets</h3>
          <p>Databricks Solutions Architect Champion</p>
          </div>
          <div class="contact-badges">
            <img src="./img/databricks_cahmpion.png" width="200" height="192" loading="lazy" alt="Databricks Solutions Architect Champion badge" />
          </div>
          </div>
          <div class="contact-portrait" aria-hidden="true">
            <picture>
              <img src="./img/ilya.png" width="340" height="492" loading="lazy" alt="" />
            </picture>
          </div>
          <a class="contact-link" href="https://www.linkedin.com/in/aniskovets" target="_blank" rel="noopener">LinkedIn profile <span aria-hidden="true">↗</span></a>
        </article>
        <article class="card contact-card coauthor-card">
          <div class="contact-copy">
          <div class="contact-details">
          <h3>Maksim Pachkouski</h3>
          <p>Databricks MVP & Databricks Solutions Architect Champion</p>
          </div>
          <div class="contact-badges">
            <img src="./img/databricks_cahmpion.png" width="200" height="192" loading="lazy" alt="Databricks Solutions Architect Champion badge" />
            <img src="./img/databricks_mvp.png" width="392" height="321" loading="lazy" alt="Databricks MVP badge" />
          </div>
          </div>
          <div class="contact-portrait" aria-hidden="true">
            <picture>
              <img src="./img/maksim.png" width="340" height="492" loading="lazy" alt="" />
            </picture>
          </div>
          <a class="contact-link" href="https://www.linkedin.com/in/protmaks" target="_blank" rel="noopener">LinkedIn profile <span aria-hidden="true">↗</span></a>
        </article>
      </div>
    </section>

    <section class="section" id="privacy">
      <h2>Your Databricks data stays in your workspace</h2>
      <p class="lead">
        The extension has no backend and no telemetry. The only network
        requests it makes are the queries themselves, sent to the Databricks
        workspace you are signed in to. We run no server, receive no data and
        cannot see what you query.
      </p>
      <p>
        The data the extension reads is used only to display your Databricks
        spend. None of it is sold, shared with third parties or used for
        advertising. Cloud machine prices are bundled with the extension, so
        estimating cluster cost does not contact any cloud provider either.
        <a href="./privacy/">Read the full privacy policy</a>.
      </p>
    </section>

    <section class="section" id="where">
      <h2>Where FinOpsWay runs: clouds, browsers, credentials</h2>
      <dl class="facts">
        <div class="fact">
          <dt>Clouds</dt>
          <dd>
            Databricks on AWS (<code>*.cloud.databricks.com</code>) and Azure
            (<code>*.azuredatabricks.net</code>). The extension works the same
            way on both.
          </dd>
        </div>
        <div class="fact">
          <dt>Browsers</dt>
          <dd>
            Chrome, Edge and Firefox, as a Manifest V3 extension. Available in the
            Chrome Web Store (Chrome and Edge) and on Firefox Add-ons.
          </dd>
        </div>
        <div class="fact">
          <dt>Credential</dt>
          <dd>
            A workspace personal access token, pasted into the extension's
            options page. It is only ever sent to that workspace.
          </dd>
        </div>
        <div class="fact">
          <dt>Data delay</dt>
          <dd>
            Costs come from Databricks billing data, which Databricks publishes
            at least a few hours after the usage. The widget shows where the
            reported data ends and how old it is, and the latest hours fill in
            as Databricks catches up.
          </dd>
        </div>
      </dl>
    </section>

  </main>

<?php include __DIR__ . '/includes/footer.php'; ?>

</body>

</html>
