<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* sites/default/files/cohesion/templates/component--cohesion-cpt-site-header.html.twig */
class __TwigTemplate_924012f5e52133ec07d9e7ebef635655 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $context["coh_instance_class"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->cohInstanceId($context), "html", null, true);
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/global_libraries.responsiveJs"), "html", null, true);
        yield " ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/global_libraries.windowscroll"), "html", null, true);
        yield " ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/element_templates.link"), "html", null, true);
        yield " ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/element_templates.image"), "html", null, true);
        yield " ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/global_libraries.matchHeight"), "html", null, true);
        yield " ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/global_libraries.parallax_scrolling"), "html", null, true);
        yield " ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/global_libraries.cohMatchHeights"), "html", null, true);
        yield " ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/element_templates.link"), "html", null, true);
        yield " ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/element_templates.drupal-menu"), "html", null, true);
        yield " ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_container"), "html", null, true);
        yield " <header class=\"coh-container ssa-component coh-component ssa-component-instance-";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["componentUuid"] ?? null), "html", null, true);
        yield " coh-component-instance-";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["componentUuid"] ?? null), "html", null, true);
        yield " site-header ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "ccdfb29c-9653-4cf2-97a8-349e2fd98fa6"));
        yield " ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "7a8763cb-a384-46b3-ab55-b30a917df1fb"));
        yield " ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "1e034b8c-7f7a-4505-830c-ed12ac608c6a"));
        yield " ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "3ce77ba2-fdff-4656-9b51-8257a78f2bf3"));
        yield " coh-style-focusable-content coh-ce-cpt_site_header-4d449bc3\" > ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_container"), "html", null, true);
        yield " <div class=\"coh-container header-wrapper coh-ce-cpt_site_header-d5b054b\" > ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_container"), "html", null, true);
        yield " <div class=\"coh-container ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["coh_instance_class"] ?? null), "html", null, true);
        yield " coh-ce-cpt_site_header-d0da703b\" > ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_link"), "html", null, true);
        yield " <a href=\"";
        $context["href"] = new Markup("/", $this->env->getCharset());
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->escapeURL(($context["href"] ?? null)), "html", null, true);
        yield "\" class=\"coh-link ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["coh_instance_class"] ?? null), "html", null, true);
        yield " coh-ce-cpt_site_header-536b6331\" target=\"_self\" > ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_image"), "html", null, true);
        yield " <img class=\"coh-image coh-ce-cpt_site_header-c2576759 coh-image-responsive-sm\" src=\"";
        $context["src"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "fd8690ce-ff64-46b5-8995-fd737ee47275"));
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        $context["imagestyle"] = "";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->cohesionImageStyle(($context["src"] ?? null), ($context["imagestyle"] ?? null)), "html", null, true);
        yield "\" ";
        if (($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "b6d34883-8a15-4507-a299-4ed89592398b") == "")) {
            yield "alt";
        } else {
            yield "alt=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "b6d34883-8a15-4507-a299-4ed89592398b"));
            yield "\"";
        }
        yield " /> </a> </div> ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_container"), "html", null, true);
        yield " ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/global_libraries.jquery_ui_effect_slide"), "html", null, true);
        yield " <a href=\"javascript:void(0)\" class=\"coh-container mobile-hamburger mobile-only coh-style-show-on-mobile coh-ce-cpt_site_header-e74ba0d1 coh-interaction\" data-interaction-modifiers=\"[{&quot;modifierType&quot;:&quot;toggle-modifier&quot;,&quot;interactionScope&quot;:&quot;component&quot;,&quot;modifierName&quot;:&quot;open&quot;,&quot;interactionTarget&quot;:&quot;.header-wrapper&quot;,&quot;interactionParent&quot;:&quot;.header-wrapper&quot;}]\" rel=\"nofollow\" data-coh-settings='{ \"xs\":{\"linkAnimation\":[{\"animationType\":\"slide\",\"animationScope\":\"component\",\"animationDirection\":\"left\",\"animationEasing\":\"swing\",\"animationParent\":\".header-wrapper\",\"animationTarget\":\".header-wrapper\"}]} }' > ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_container"), "html", null, true);
        yield " <div class=\"coh-container header-menu coh-ce-cpt_site_header-71cfb03d\" > ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_drupal_menu"), "html", null, true);
        yield " ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderMenu("main", "menu_tpl_main_navigation", false, 1), "html", null, true);
        yield " </div> ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_container"), "html", null, true);
        yield " <div class=\"coh-container coh-ce-cpt_site_header-71cfb03d\" > ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_container"), "html", null, true);
        yield " <div class=\"coh-container header-contact coh-ce-cpt_site_header-d7e3fcdc\" > ";
        $context["inlineElementContent"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "e3c6e040-d3d5-48a8-9727-f752571e9354"));
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield " <span class=\"coh-inline-element\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["inlineElementContent"] ?? null), "html", null, true);
        yield "</span> </div> </div> </a> ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_container"), "html", null, true);
        yield " <div class=\"coh-container header-menu hide-mobile coh-style-hide-on-mobile coh-ce-cpt_site_header-a586471a\" > ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_drupal_menu"), "html", null, true);
        yield " ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderMenu("main", "menu_tpl_main_navigation", false, 1), "html", null, true);
        yield " </div> ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_container"), "html", null, true);
        yield " <div class=\"coh-container coh-style-hide-on-mobile\" > ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_container"), "html", null, true);
        yield " <div class=\"coh-container header-contact hide-mobile\" > ";
        $context["inlineElementContent"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "e3c6e040-d3d5-48a8-9727-f752571e9354"));
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield " <span class=\"coh-inline-element\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["inlineElementContent"] ?? null), "html", null, true);
        yield "</span> </div> </div> </div> </header> ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_container"), "html", null, true);
        yield " <div class=\"coh-container ssa-component coh-component ssa-component-instance-";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["componentUuid"] ?? null), "html", null, true);
        yield " coh-component-instance-";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["componentUuid"] ?? null), "html", null, true);
        yield "\" data-coh-match-heights=\"{&quot;md&quot;:{&quot;target&quot;:&quot;site-header.header-position--fixed&quot;,&quot;children&quot;:false}}\" > </div> 
";
        // line 2
        $context["compiledCSS"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield "<style>.";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["coh_instance_class"] ?? null), "html", null, true);
            yield ".coh-ce-cpt_site_header-d0da703b {
  margin-right: 0;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-flex-basis: auto;
      -ms-flex-preferred-size: auto;
          flex-basis: auto;
  -webkit-box-flex: 0;
  -webkit-flex-grow: 0;
      -ms-flex-positive: 0;
          flex-grow: 0;
  width: 100%;
}
@media (min-width: 768px) {
  .";
            // line 22
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["coh_instance_class"] ?? null), "html", null, true);
            yield ".coh-ce-cpt_site_header-d0da703b {
";
            // line 23
            if ( !Twig\Extension\CoreExtension::testEmpty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "e24fd2bd-e87a-41ee-a91a-e5eef8f7d6d7"))) {
                yield "     ";
                if ( !Twig\Extension\CoreExtension::testEmpty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "e24fd2bd-e87a-41ee-a91a-e5eef8f7d6d7"))) {
                    yield " max-width: ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "e24fd2bd-e87a-41ee-a91a-e5eef8f7d6d7"));
                    yield "px;";
                }
            }
            // line 24
            yield "  }
}
@media (min-width: 1024px) {
  .";
            // line 27
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["coh_instance_class"] ?? null), "html", null, true);
            yield ".coh-ce-cpt_site_header-d0da703b {
    margin-right: 0.5rem;
    -webkit-flex-basis: 0;
        -ms-flex-preferred-size: 0;
            flex-basis: 0;
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
";
            // line 36
            if ( !Twig\Extension\CoreExtension::testEmpty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "15781c68-34fb-470d-aa37-568c76107d4e"))) {
                yield "     ";
                if ( !Twig\Extension\CoreExtension::testEmpty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "15781c68-34fb-470d-aa37-568c76107d4e"))) {
                    yield " max-width: ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "15781c68-34fb-470d-aa37-568c76107d4e"));
                    yield "px;";
                }
            }
            // line 37
            yield "  }
}
@media (min-width: 1400px) {
  .";
            // line 40
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["coh_instance_class"] ?? null), "html", null, true);
            yield ".coh-ce-cpt_site_header-d0da703b:after {
    margin-right: auto;
  }
}
@media (min-width: 1400px) {
  .menu-position-desktop--left .";
            // line 45
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["coh_instance_class"] ?? null), "html", null, true);
            yield ".coh-ce-cpt_site_header-d0da703b {
    -webkit-flex-basis: auto;
        -ms-flex-preferred-size: auto;
            flex-basis: auto;
    -webkit-box-flex: 0;
    -webkit-flex-grow: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
  }
}
.";
            // line 55
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["coh_instance_class"] ?? null), "html", null, true);
            yield ".coh-ce-cpt_site_header-536b6331 {
  margin-right: 0;
";
            // line 57
            if ( !Twig\Extension\CoreExtension::testEmpty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "e24fd2bd-e87a-41ee-a91a-e5eef8f7d6d7"))) {
                yield "   ";
                if ( !Twig\Extension\CoreExtension::testEmpty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "e24fd2bd-e87a-41ee-a91a-e5eef8f7d6d7"))) {
                    yield " width: ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "e24fd2bd-e87a-41ee-a91a-e5eef8f7d6d7"));
                    yield "px;";
                }
            }
            // line 58
            yield "}
@media (min-width: 1024px) {
  .";
            // line 60
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["coh_instance_class"] ?? null), "html", null, true);
            yield ".coh-ce-cpt_site_header-536b6331 {
    margin-right: auto;
";
            // line 62
            if ( !Twig\Extension\CoreExtension::testEmpty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "15781c68-34fb-470d-aa37-568c76107d4e"))) {
                yield "     ";
                if ( !Twig\Extension\CoreExtension::testEmpty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "15781c68-34fb-470d-aa37-568c76107d4e"))) {
                    yield " width: ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "15781c68-34fb-470d-aa37-568c76107d4e"));
                    yield "px;";
                }
            }
            // line 63
            yield "  }
}
</style>";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 65
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderInlineStyle(($context["compiledCSS"] ?? null)));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["componentUuid"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "sites/default/files/cohesion/templates/component--cohesion-cpt-site-header.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  284 => 65,  278 => 63,  269 => 62,  264 => 60,  260 => 58,  251 => 57,  246 => 55,  233 => 45,  225 => 40,  220 => 37,  211 => 36,  199 => 27,  194 => 24,  185 => 23,  181 => 22,  156 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "sites/default/files/cohesion/templates/component--cohesion-cpt-site-header.html.twig", "/var/www/html/web/sites/default/files/cohesion/templates/component--cohesion-cpt-site-header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "if" => 1];
        static $filters = ["escape" => 1, "raw" => 1];
        static $functions = ["coh_instanceid" => 1, "attach_library" => 1, "getComponentFieldValue" => 1, "escape_url" => 1, "cohesion_image_style" => 1, "render_menu" => 1, "renderInlineStyle" => 65];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'raw'],
                ['coh_instanceid', 'attach_library', 'getComponentFieldValue', 'escape_url', 'cohesion_image_style', 'render_menu', 'renderInlineStyle'],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
