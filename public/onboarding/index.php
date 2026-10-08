<?php
$page = [
  'title' => 'Databricks Cost Monitoring Guide | FinOpsWay',
  'description' => 'Set up FinOpsWay to monitor Databricks costs. Install the free browser extension, configure a cluster and connect your Databricks workspace.',
  'path' => '/onboarding/',
  'og_title' => 'Databricks Cost Monitoring Guide | FinOpsWay',
  'image' => 'https://finopsway.com/img/examples/workspace-cost-popover.jpg',
  'image_alt' => 'FinOpsWay showing Databricks costs inside the workspace',
  'styles' => ['/onboarding/onboarding.css?v=007'],
  'scripts' => ['/onboarding/onboarding.js?v=002'],
];
include __DIR__ . '/../includes/header.php';
?>

  <main id="main" class="guide-layout">
    <div class="guide-content">
    <section class="guide-hero">
      <p class="eyebrow">Getting started</p>
      <h1>Set up FinOpsWay in your browser</h1>
      <p class="standfirst">A short path from installing the extension to seeing the cost of a Databricks cluster in its own page navigation.</p>
    </section>

    <section id="install" class="section guide-section">
      <div class="step-heading">
        <a class="step-number" href="#install" aria-label="Step 1">1</a>
        <div><p class="eyebrow">Install</p><h2>Add FinOpsWay to your browser</h2></div>
      </div>
      <p>Install the extension from your browser’s store. No FinOpsWay account is required.</p>
      <div class="download-grid">
        <a class="download-card" href="https://chromewebstore.google.com/detail/finopsway-costs/lpfecokigmjdmdcfleiebiainkndhooi" target="_blank" rel="noopener">
          <span class="browser-icon"><img src="../img/google_chrome.svg" alt="" /></span>
          <span class="download-card-copy">
            <span class="download-card-label">Available for</span>
            <strong>Google Chrome</strong>
            <span class="download-card-action">Get the extension <span aria-hidden="true">↗</span></span>
          </span>
        </a>
        <a class="download-card" href="https://chromewebstore.google.com/detail/finopsway-costs/lpfecokigmjdmdcfleiebiainkndhooi" target="_blank" rel="noopener">
          <span class="browser-icon"><img src="../img/edge.svg" alt="" /></span>
          <span class="download-card-copy">
            <span class="download-card-label">Available for</span>
            <strong>Microsoft Edge</strong>
            <span class="download-card-action">Get the extension <span aria-hidden="true">↗</span></span>
          </span>
        </a>
        <a class="download-card" href="https://addons.mozilla.org/firefox/addon/finopsway-costs/" target="_blank" rel="noopener">
          <span class="browser-icon"><img src="../img/firefox.svg" alt="" /></span>
          <span class="download-card-copy">
            <span class="download-card-label">Available for</span>
            <strong>Mozilla Firefox</strong>
            <span class="download-card-action">Get the extension <span aria-hidden="true">↗</span></span>
          </span>
        </a>
      </div>
      <p class="note">Microsoft Edge uses the Chrome Web Store listing.</p>
    </section>

    <section id="create-cluster" class="section guide-section">
      <div class="step-heading">
        <a class="step-number" href="#create-cluster" aria-label="Step 2">2</a>
        <div><p class="eyebrow">Create</p><h2>Create and configure a cluster</h2></div>
      </div>
      <ol class="guide-list">
        <li>In Databricks, go to <strong>Compute -> SQL warehouses</strong> and select <strong>Create SQL warehouse (2X-Small)</strong>.</li>
        <li>Give the cluster a clear name, choose its access mode.</li>
        <li>Set an auto-termination period 5 minutes, then create the cluster.</li>
      </ol>
    </section>

    <section id="connect" class="section guide-section">
      <div class="step-heading">
        <a class="step-number" href="#connect" aria-label="Step 3">3</a>
        <div><p class="eyebrow">Connect</p><h2>Connect your Databricks workspace</h2></div>
      </div>
      <ol class="guide-list">
        <li>Open any page in the Databricks workspace, and then activate the FinOpsWay extension.</li>
        <a class="guide-screenshot" href="../img/onboarding/onboarding-workspace-setup.jpg" target="_blank" rel="noopener" aria-label="View the FinOpsWay setup screenshot at full size (opens in a new tab)">
          <picture>
            <img src="../img/onboarding/onboarding-workspace-setup.jpg" width="2866" height="644" alt="FinOpsWay extension popup in a Databricks workspace, showing the activation switch, SQL warehouse selector and Configure toolbar link." loading="lazy" />
          </picture>
        </a>

        <li>Select the workspace connection type: Access token (recommended) or Browser session (internal API)</li>
        <aside class="guide-warning" role="note">
          <strong>Browser session mode: use at your own risk</strong>
          No token needed, but undocumented and blocked by some workspaces. Use only if you cannot create a token.
        </aside>

        <li>Create a personal access token <strong>Settings -> User -> Developer -> Access Tokens -> Manage</strong>.<br/>
        And choose <code>sql</code> in API scopes.</li>
        <a class="guide-screenshot guide-screenshot--half" href="../img/onboarding/onboarding-access-token-setup.jpg" target="_blank" rel="noopener" aria-label="View the personal access token setup screenshot at full size (opens in a new tab)">
          <picture>
            <img src="../img/onboarding/onboarding-access-token-setup.jpg" width="654" height="460" alt="Personal access token setup in Databricks." loading="lazy" />
          </picture>
        </a>
        <aside class="guide-tip">
          The extension only makes read-only queries to your workspace. Your token is stored locally in the browser and is sent only to that workspace.
        </aside>

        <li>Paste a personal access token for that workspace.</li>

        <li>The user must have read access to the tables <code>system.billing</code> and <code>system.compute</code>.</li>
        <aside class="guide-tip">
          If the tables have been copied to a different catalog, you can change the catalog in the extension settings.
        </aside>
      </ol>
    </section>

    

    </div>
  </main>

<?php include __DIR__ . '/../includes/footer.php'; ?>
