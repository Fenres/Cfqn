<?php
/**
 * Title: FAQ Accordion
 * Slug: accordion
 * Categories: faq
 * 
 */
?><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|md","top":"var:preset|spacing|sm","right":"var:preset|spacing|xs","left":"var:preset|spacing|xs"}},"position":{"all":"relative"},"zIndex":{"all":"1"},"overflow":{"all":"visible"}},"className":"is-style-default","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-default" style="padding-top:var(--wp--preset--spacing--sm);padding-right:var(--wp--preset--spacing--xs);padding-bottom:var(--wp--preset--spacing--md);padding-left:var(--wp--preset--spacing--xs)"><!-- wp:paragraph {"align":"center","className":"is-style-sub-heading"} -->
<p class="aligncenter has-text-align-center is-style-sub-heading aligncenter">FAQ</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"textAlign":"center","gradient":"heading","className":"wp-block-heading","animation":{"name":"fade-in-down","duration":1}} -->
<h2 class="wp-block-heading has-text-align-center has-heading-gradient-background has-background has-animation" style="animation-name:fade-in-down;animation-duration:1s;animation-iteration-count:1">Frequently Asked Questions</h2>
<!-- /wp:heading -->
<!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|sm","bottom":"var:preset|spacing|sm","right":"0","left":"0"},"blockGap":{"top":"var:preset|spacing|sm","left":"var:preset|spacing|sm"}}},"className":"is-style-default"} -->
<div class="wp-block-columns alignwide is-style-default" style="padding-top:var(--wp--preset--spacing--sm);padding-right:0;padding-bottom:var(--wp--preset--spacing--sm);padding-left:0"><!-- wp:column {"style":{"position":{"all":"relative"},"zIndex":{"all":"1"}},"className":"is-style-default"} -->
<div class="wp-block-column is-style-default"><!-- wp:list {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"var:preset|spacing|xs"}},"className":"is-style-accordion"} -->
<ul class="is-style-accordion" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:list-item {"className":"is-style-default","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|xs"}},"border":{"bottom":{"width":"1px"}}}} -->
<li class="is-style-default" style="border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--xs)"><strong>How to edit the static Front Page?</strong><br><br>To set up the front page template, go to Appearance &gt; Editor and navigate to the Front Page template. Open the Document Overview panel to view the block structure tree, and copy all blocks between the Header and Footer template parts. Exit the Site Editor and navigate to Pages &gt; Add New. Enter the title for the home page, paste the previously copied blocks into the page with Cmd + V or Ctrl + V on Windows, and save and publish the home page. Exit the Page Editor and navigate to Settings &gt; Reading, then set the newly created home page as the Static Front Page and the blog page if necessary. Navigate back to the Front Page template in the Site Editor, open the Document Overview panel, and remove all blocks between the Header and Footer. Insert a new Post Content block between the Header and Footer, then click Save and publish your changes.</li>
<!-- /wp:list-item -->
<!-- wp:list-item {"className":"is-style-default","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|xs"}},"border":{"bottom":{"width":"1px"}}}} -->
<li class="is-style-default" style="border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--xs)"><strong>How to add custom SVG images?</strong><br><br>Simply open the Editor and search for the “SVG” block, add your svg/html content in the SVG String field and customize to your liking.</li>
<!-- /wp:list-item -->
<!-- wp:list-item {"className":"is-style-default","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|xs"}},"border":{"bottom":{"width":"1px"}}}} -->
<li class="is-style-default" style="border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--xs)"><strong>How to edit mobile navigation menu?</strong><br><br>The theme settings allow you to create separate navigation menus depending on the screen size. The video below demonstrates how to access the mobile navigation menus display settings from the Site Editor:</li>
<!-- /wp:list-item -->
<!-- wp:list-item {"className":"is-style-default","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|xs"}},"border":{"bottom":{"width":"1px"}}}} -->
<li class="is-style-default" style="border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--xs)"><strong>How to add template parts to templates?</strong><br><br>Below is a basic example of how to create your own template parts and add them to default or custom templates. The screen recording below demonstrates how to create a custom Footer template part which is displayed only on the Page template</li>
<!-- /wp:list-item -->
<!-- wp:list-item {"className":"is-style-default","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|xs"}},"border":{"bottom":{"width":"1px"}}}} -->
<li class="is-style-default" style="border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--xs)"><strong>How to edit the front page template?</strong><br><br>To edit the Front Page, first create a new page with any name you like. Add your choice of block patterns to the page, edit the content as needed and click Publish. Once published, navigate to Settings &gt; Reading and set the Front Page to the page you created. If you don’t see the changes, make sure there is no custom Front Page set in the Editor. If there is, simply clear your customizations and it will be reverted to the theme default and work correctly. It’s best to always edit the front page from the page itself and not the Site Editor.</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->
<!-- wp:spacer {"height":"600px","style":{"width":{"all":"600px"},"top":{"all":""},"right":{"all":""},"position":{"all":"absolute"},"zIndex":{"all":"-1"},"bottom":{"all":"-300px"},"left":{"all":"-300px"}},"gradient":"circle"} -->
<div style="height:600px" aria-hidden="true" class="wp-block-spacer has-circle-gradient-background has-background"></div>
<!-- /wp:spacer --></div>
<!-- /wp:column -->
<!-- wp:column {"style":{"position":{"all":"relative"},"zIndex":{"all":"1"}},"className":"is-style-default"} -->
<div class="wp-block-column is-style-default"><!-- wp:spacer {"height":"600px","style":{"width":{"all":"600px"},"top":{"all":"-300px"},"right":{"all":"-300px"},"position":{"all":"absolute"},"zIndex":{"all":"-1"},"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"gradient":"circle"} -->
<div style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;height:600px" aria-hidden="true" class="wp-block-spacer has-circle-gradient-background has-background"></div>
<!-- /wp:spacer -->
<!-- wp:list {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"var:preset|spacing|xs","margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"is-style-accordion"} -->
<ul class="is-style-accordion" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:list-item {"className":"is-style-default","style":{"border":{"bottom":{"width":"1px"}},"spacing":{"padding":{"bottom":"var:preset|spacing|xs"}}}} -->
<li class="is-style-default" style="border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--xs)"><strong>How to create accordions?</strong><br><br>Accordions extend the core list block to create collapsible toggle sections for displaying FAQs on your site. Accordions require specific formatting to display correctly. First, ensure that the title of the list item is on its own line. Then hit enter/return to create a new line for the content paragraph. This is how the theme determines the accordion item title and content.</li>
<!-- /wp:list-item -->
<!-- wp:list-item {"className":"is-style-default","style":{"border":{"bottom":{"width":"1px"}},"spacing":{"padding":{"bottom":"var:preset|spacing|xs"}}}} -->
<li class="is-style-default" style="border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--xs)"><strong>How to add a custom dark mode colors?</strong><br><br>To customize the Dark Mode color palette, navigate to Appearance &gt; Editor and click on the Styles button in the top right corner (light/dark circle). Click Colors, then Palette, and finally the Custom tab. In the Custom section, click the Add ➕ button, select your colors, and give each color a name beginning with Dark Mode, for example: Dark Mode Foreground. Click Done and then click Save to save your changes.</li>
<!-- /wp:list-item -->
<!-- wp:list-item {"className":"is-style-default","style":{"border":{"bottom":{"width":"1px"}},"spacing":{"padding":{"bottom":"var:preset|spacing|xs"}}}} -->
<li class="is-style-default" style="border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--xs)"><strong>How to change the site logo?</strong><br><br>To replace the regular image block with the Site Logo block in the Blockify theme preview, navigate to Appearance &gt; Editor and click on the logo (image block). Click Replace, then click Open Media Library to upload or choose your own logo image and click Select. Add a link by clicking on the link 🔗 icon in the block toolbar, enter the URL and click the ⏎ button to apply. Save your site changes. The steps above are demonstrated in the screen recording below.</li>
<!-- /wp:list-item -->
<!-- wp:list-item {"className":"is-style-default","style":{"border":{"bottom":{"width":"1px"}},"spacing":{"padding":{"bottom":"var:preset|spacing|xs"}}}} -->
<li class="is-style-default" style="border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--xs)"><strong>How do I create a child theme?</strong><br><br>We recommend using the create block theme plugin to create your own child themes. With a little know-how, they can be the perfect way to build your own website. They inherit all of the parent theme’s design which saves you a tonne of work and provides a head start for your next project.</li>
<!-- /wp:list-item -->
<!-- wp:list-item {"className":"is-style-default","style":{"border":{"bottom":{"width":"1px"}},"spacing":{"padding":{"bottom":"var:preset|spacing|xs"}}}} -->
<li class="is-style-default" style="border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--xs)"><strong>Changes aren't showing on my site?</strong><br><br>This can happen for a number of reasons. One of the main causes of page content not being updated is that a custom template is set and needs to be removed. Other troubleshooting options to try are clearing customizations, removing unused templates, enabling WP_DEBUG to force regenerate theme.json. If you are not able to solve your issue, please don’t hesitate to get in touch.</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->