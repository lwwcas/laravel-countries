import{_ as i,c as a,a1 as e,o as t}from"./chunks/framework.C72X4JAr.js";const k=JSON.parse('{"title":"Basic Usage Global Scopes","description":"","frontmatter":{},"headers":[],"relativePath":"the-basics/global-scopes.md","filePath":"the-basics/global-scopes.md"}'),l={name:"the-basics/global-scopes.md"};function n(h,s,o,p,d,r){return t(),a("div",null,s[0]||(s[0]=[e(`<h1 id="basic-usage-global-scopes" tabindex="-1">Basic Usage Global Scopes <a class="header-anchor" href="#basic-usage-global-scopes" aria-label="Permalink to &quot;Basic Usage Global Scopes&quot;">​</a></h1><p>In country model and region model, two global scopes are automatically applied during the class boot process.</p><p>These scopes are enabled by default, and no additional configuration is required to activate them. They are always automatically applied when querying the Country model.</p><h2 id="overview" tabindex="-1">Overview <a class="header-anchor" href="#overview" aria-label="Permalink to &quot;Overview&quot;">​</a></h2><p><code>Visible Scope</code>: This global scope ensures that only countries where the <code>&#39;is_visible&#39;</code> field is set to <code>true</code> are retrieved. This means that all queries will automatically filter out countries marked as not visible.</p><div class="language-php vp-adaptive-theme"><button title="Copy Code" class="copy"></button><span class="lang">php</span><pre class="shiki shiki-themes github-light github-dark vp-code" tabindex="0"><code><span class="line"><span style="--shiki-light:#24292E;--shiki-dark:#E1E4E8;">$builder</span><span style="--shiki-light:#D73A49;--shiki-dark:#F97583;">-&gt;</span><span style="--shiki-light:#6F42C1;--shiki-dark:#B392F0;">where</span><span style="--shiki-light:#24292E;--shiki-dark:#E1E4E8;">(</span><span style="--shiki-light:#032F62;--shiki-dark:#9ECBFF;">&#39;is_visible&#39;</span><span style="--shiki-light:#24292E;--shiki-dark:#E1E4E8;">, </span><span style="--shiki-light:#005CC5;--shiki-dark:#79B8FF;">true</span><span style="--shiki-light:#24292E;--shiki-dark:#E1E4E8;">);</span></span></code></pre></div><p><code>Translation Scope</code>: This global scope ensures that translations are always eagerly loaded with each country query, so there is no need to manually include them in each query.</p><div class="language-php vp-adaptive-theme"><button title="Copy Code" class="copy"></button><span class="lang">php</span><pre class="shiki shiki-themes github-light github-dark vp-code" tabindex="0"><code><span class="line"><span style="--shiki-light:#24292E;--shiki-dark:#E1E4E8;">$builder</span><span style="--shiki-light:#D73A49;--shiki-dark:#F97583;">-&gt;</span><span style="--shiki-light:#6F42C1;--shiki-dark:#B392F0;">withTranslation</span><span style="--shiki-light:#24292E;--shiki-dark:#E1E4E8;">();</span></span></code></pre></div><h2 id="disabling-the-scope" tabindex="-1">Disabling the Scope <a class="header-anchor" href="#disabling-the-scope" aria-label="Permalink to &quot;Disabling the Scope&quot;">​</a></h2><p>To disable these global scopes on a per-query basis, you can use the <code>withNotTranslation()</code> or <code>withNotVisible()</code> method as demonstrated in the following code examples. This allows you to bypass the automatic filters that are otherwise applied by default.</p><h3 id="disabling-the-translation-scope" tabindex="-1">Disabling the <code>translation</code> scope <a class="header-anchor" href="#disabling-the-translation-scope" aria-label="Permalink to &quot;Disabling the \`translation\` scope&quot;">​</a></h3><p>By calling the <code>withNotTranslation()</code> method, the translation scope is removed for that particular query. This is useful if you want to fetch the data without the translations eager-loaded.</p><div class="vp-code-group vp-adaptive-theme"><div class="tabs"><input type="radio" name="group-a2wEO" id="tab-JD-tG-p" checked><label for="tab-JD-tG-p">Country::class</label><input type="radio" name="group-a2wEO" id="tab-WF6MHS1"><label for="tab-WF6MHS1">Region::class</label></div><div class="blocks"><div class="language-php vp-adaptive-theme active"><button title="Copy Code" class="copy"></button><span class="lang">php</span><pre class="shiki shiki-themes github-light github-dark vp-code" tabindex="0"><code><span class="line"><span style="--shiki-light:#D73A49;--shiki-dark:#F97583;">use</span><span style="--shiki-light:#005CC5;--shiki-dark:#79B8FF;"> Lwwcas\\LaravelCountries\\Models\\Country</span><span style="--shiki-light:#24292E;--shiki-dark:#E1E4E8;">;</span></span>
<span class="line"></span>
<span class="line highlighted"><span style="--shiki-light:#005CC5;--shiki-dark:#79B8FF;">Country</span><span style="--shiki-light:#D73A49;--shiki-dark:#F97583;">::</span><span style="--shiki-light:#6F42C1;--shiki-dark:#B392F0;">withNotTranslation</span><span style="--shiki-light:#24292E;--shiki-dark:#E1E4E8;">()</span></span>
<span class="line"><span style="--shiki-light:#D73A49;--shiki-dark:#F97583;">    -&gt;</span><span style="--shiki-light:#6F42C1;--shiki-dark:#B392F0;">whereName</span><span style="--shiki-light:#24292E;--shiki-dark:#E1E4E8;">(</span><span style="--shiki-light:#032F62;--shiki-dark:#9ECBFF;">&#39;United Kingdom&#39;</span><span style="--shiki-light:#24292E;--shiki-dark:#E1E4E8;">)</span></span>
<span class="line"><span style="--shiki-light:#D73A49;--shiki-dark:#F97583;">    -&gt;</span><span style="--shiki-light:#6F42C1;--shiki-dark:#B392F0;">first</span><span style="--shiki-light:#24292E;--shiki-dark:#E1E4E8;">();</span></span></code></pre></div><div class="language-php vp-adaptive-theme"><button title="Copy Code" class="copy"></button><span class="lang">php</span><pre class="shiki shiki-themes github-light github-dark vp-code" tabindex="0"><code><span class="line"><span style="--shiki-light:#D73A49;--shiki-dark:#F97583;">use</span><span style="--shiki-light:#005CC5;--shiki-dark:#79B8FF;"> Lwwcas\\LaravelCountries\\Models\\CountryRegion</span><span style="--shiki-light:#24292E;--shiki-dark:#E1E4E8;">;</span></span>
<span class="line"></span>
<span class="line highlighted"><span style="--shiki-light:#005CC5;--shiki-dark:#79B8FF;">CountryRegion</span><span style="--shiki-light:#D73A49;--shiki-dark:#F97583;">::</span><span style="--shiki-light:#6F42C1;--shiki-dark:#B392F0;">withNotTranslation</span><span style="--shiki-light:#24292E;--shiki-dark:#E1E4E8;">()</span></span>
<span class="line"><span style="--shiki-light:#D73A49;--shiki-dark:#F97583;">    -&gt;</span><span style="--shiki-light:#6F42C1;--shiki-dark:#B392F0;">whereName</span><span style="--shiki-light:#24292E;--shiki-dark:#E1E4E8;">(</span><span style="--shiki-light:#032F62;--shiki-dark:#9ECBFF;">&#39;Africa&#39;</span><span style="--shiki-light:#24292E;--shiki-dark:#E1E4E8;">)</span></span>
<span class="line"><span style="--shiki-light:#D73A49;--shiki-dark:#F97583;">    -&gt;</span><span style="--shiki-light:#6F42C1;--shiki-dark:#B392F0;">first</span><span style="--shiki-light:#24292E;--shiki-dark:#E1E4E8;">();</span></span></code></pre></div></div></div><h3 id="disabling-the-visible-scope" tabindex="-1">Disabling the <code>visible</code> scope <a class="header-anchor" href="#disabling-the-visible-scope" aria-label="Permalink to &quot;Disabling the \`visible\` scope&quot;">​</a></h3><p>Similarly, the withNotVisible() method removes the <code>is_visible</code> filter, allowing you to retrieve countries that may not be marked as visible.</p><div class="vp-code-group vp-adaptive-theme"><div class="tabs"><input type="radio" name="group--VfBR" id="tab-G01LW6M" checked><label for="tab-G01LW6M">Country::class</label><input type="radio" name="group--VfBR" id="tab-SqhwZoj"><label for="tab-SqhwZoj">Region::class</label></div><div class="blocks"><div class="language-php vp-adaptive-theme active"><button title="Copy Code" class="copy"></button><span class="lang">php</span><pre class="shiki shiki-themes github-light github-dark vp-code" tabindex="0"><code><span class="line"><span style="--shiki-light:#D73A49;--shiki-dark:#F97583;">use</span><span style="--shiki-light:#005CC5;--shiki-dark:#79B8FF;"> Lwwcas\\LaravelCountries\\Models\\Country</span><span style="--shiki-light:#24292E;--shiki-dark:#E1E4E8;">;</span></span>
<span class="line"></span>
<span class="line highlighted"><span style="--shiki-light:#005CC5;--shiki-dark:#79B8FF;">Country</span><span style="--shiki-light:#D73A49;--shiki-dark:#F97583;">::</span><span style="--shiki-light:#6F42C1;--shiki-dark:#B392F0;">withNotVisible</span><span style="--shiki-light:#24292E;--shiki-dark:#E1E4E8;">()</span></span>
<span class="line"><span style="--shiki-light:#D73A49;--shiki-dark:#F97583;">    -&gt;</span><span style="--shiki-light:#6F42C1;--shiki-dark:#B392F0;">whereName</span><span style="--shiki-light:#24292E;--shiki-dark:#E1E4E8;">(</span><span style="--shiki-light:#032F62;--shiki-dark:#9ECBFF;">&#39;United Kingdom&#39;</span><span style="--shiki-light:#24292E;--shiki-dark:#E1E4E8;">)</span></span>
<span class="line"><span style="--shiki-light:#D73A49;--shiki-dark:#F97583;">    -&gt;</span><span style="--shiki-light:#6F42C1;--shiki-dark:#B392F0;">first</span><span style="--shiki-light:#24292E;--shiki-dark:#E1E4E8;">();</span></span></code></pre></div><div class="language-php vp-adaptive-theme"><button title="Copy Code" class="copy"></button><span class="lang">php</span><pre class="shiki shiki-themes github-light github-dark vp-code" tabindex="0"><code><span class="line"><span style="--shiki-light:#D73A49;--shiki-dark:#F97583;">use</span><span style="--shiki-light:#005CC5;--shiki-dark:#79B8FF;"> Lwwcas\\LaravelCountries\\Models\\CountryRegion</span><span style="--shiki-light:#24292E;--shiki-dark:#E1E4E8;">;</span></span>
<span class="line"></span>
<span class="line highlighted"><span style="--shiki-light:#005CC5;--shiki-dark:#79B8FF;">CountryRegion</span><span style="--shiki-light:#D73A49;--shiki-dark:#F97583;">::</span><span style="--shiki-light:#6F42C1;--shiki-dark:#B392F0;">withNotVisible</span><span style="--shiki-light:#24292E;--shiki-dark:#E1E4E8;">()</span></span>
<span class="line"><span style="--shiki-light:#D73A49;--shiki-dark:#F97583;">    -&gt;</span><span style="--shiki-light:#6F42C1;--shiki-dark:#B392F0;">whereName</span><span style="--shiki-light:#24292E;--shiki-dark:#E1E4E8;">(</span><span style="--shiki-light:#032F62;--shiki-dark:#9ECBFF;">&#39;Africa&#39;</span><span style="--shiki-light:#24292E;--shiki-dark:#E1E4E8;">)</span></span>
<span class="line"><span style="--shiki-light:#D73A49;--shiki-dark:#F97583;">    -&gt;</span><span style="--shiki-light:#6F42C1;--shiki-dark:#B392F0;">first</span><span style="--shiki-light:#24292E;--shiki-dark:#E1E4E8;">();</span></span></code></pre></div></div></div><h3 id="important-note" tabindex="-1">Important Note <a class="header-anchor" href="#important-note" aria-label="Permalink to &quot;Important Note&quot;">​</a></h3><div class="warning custom-block"><p class="custom-block-title">WARNING</p><p>In all other queries, both global scopes (<code>is_visible</code> and <code>translation</code>) will continue to be applied automatically, ensuring that only visible countries with translations are retrieved unless explicitly overridden.</p></div><h2 id="methods" tabindex="-1">Methods <a class="header-anchor" href="#methods" aria-label="Permalink to &quot;Methods&quot;">​</a></h2><p>Although these aren&#39;t traditional scopes, the methods in this section behave similarly by allowing you to easily filter and query data. They provide a convenient, reusable way to interact with your data, just like scopes would.</p><p>Everything here applies to both <code>Country::class</code> and <code>CountryRegion::class</code>, so you can use these methods to streamline your queries for both countries and regions.</p><table tabindex="0"><thead><tr><th>Field</th><th>Description</th></tr></thead><tbody><tr><td>isVisible()</td><td>Returns a boolean indicating if the country/regio <code>is_visible</code> flag is <code>true</code>.</td></tr><tr><td>isHidden()</td><td>Returns a boolean indicating if the country/regio <code>is_visible</code> flag is <code>false</code>.</td></tr><tr><td>setVisibleTrue()</td><td>Sets the country/regio <code>is_visible</code> flag to <code>true</code>.</td></tr><tr><td>setVisibleFalse()</td><td>Sets the country/regio <code>is_visible</code> flag to <code>false</code>.</td></tr><tr><td>setModelVisible()</td><td>Sets the country/regio <code>is_visible</code> flag to <code>true</code>.</td></tr><tr><td>setModelHidden()</td><td>Sets the country/regio <code>is_visible</code> flag to <code>false</code>.</td></tr></tbody></table>`,22)]))}const g=i(l,[["render",n]]);export{k as __pageData,g as default};