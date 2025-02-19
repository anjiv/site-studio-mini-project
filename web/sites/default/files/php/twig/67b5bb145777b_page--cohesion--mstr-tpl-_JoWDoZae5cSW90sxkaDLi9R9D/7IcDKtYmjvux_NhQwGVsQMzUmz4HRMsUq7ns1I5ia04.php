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

/* sites/default/files/cohesion/templates/page--cohesion--mstr-tpl-master-template-boxed.html.twig */
class __TwigTemplate_f3284c7574c7ead4e17a87d7f0c64451 extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/global_libraries.responsiveJs"), "html", null, true);
        yield " ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/global_libraries.windowscroll"), "html", null, true);
        yield " ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/element_templates.link"), "html", null, true);
        yield " ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/global_libraries.matchHeight"), "html", null, true);
        yield " ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/global_libraries.parallax_scrolling"), "html", null, true);
        yield " ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/global_libraries.cohMatchHeights"), "html", null, true);
        yield " ";
        $context["component_variable_7a8763cb_a384_46b3_ab55_b30a917df1fb"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("header-position--fixed", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield " ";
        $context["component_variable_ccdfb29c_9653_4cf2_97a8_349e2fd98fa6"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("coh-style-header-light-theme", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield " ";
        $context["component_variable_fd8690ce_ff64_46b5_8995_fd737ee47275"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->tokenReplace("[media-reference:file:54d04cb0-6be2-4cd9-b5c0-bab3e21e76af]", ["media-reference" => ($context["media_reference"] ?? null)], $context, true), "html", null, true);
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield " ";
        $context["component_variable_b6d34883_8a15_4507_a299_4ed89592398b"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("Placeholder", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield " ";
        $context["component_variable_15781c68_34fb_470d_aa37_568c76107d4e"] = 160;
        yield " ";
        $context["component_variable_e24fd2bd_e87a_41ee_a91a_e5eef8f7d6d7"] = 100;
        yield " ";
        $context["component_variable_1e034b8c_7f7a_4505_830c_ed12ac608c6a"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("menu-position-desktop--left", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield " ";
        $context["component_variable_3ce77ba2_fdff_4656_9b51_8257a78f2bf3"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("menu-column-count-desktop-1", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield " ";
        $context["component_variable_ae3580df_0054_4944_90f8_e2736dacde2c"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("Menu toggle", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield " ";
        $context["component_variable_e3c6e040_d3d5_48a8_9727_f752571e9354"] = 79005678867;
        yield " ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderComponent("cpt_site_header", true, $context, ["7a8763cb-a384-46b3-ab55-b30a917df1fb" => "component_variable_7a8763cb_a384_46b3_ab55_b30a917df1fb", "ccdfb29c-9653-4cf2-97a8-349e2fd98fa6" => "component_variable_ccdfb29c_9653_4cf2_97a8_349e2fd98fa6", "fd8690ce-ff64-46b5-8995-fd737ee47275" => "component_variable_fd8690ce_ff64_46b5_8995_fd737ee47275", "b6d34883-8a15-4507-a299-4ed89592398b" => "component_variable_b6d34883_8a15_4507_a299_4ed89592398b", "15781c68-34fb-470d-aa37-568c76107d4e" => "component_variable_15781c68_34fb_470d_aa37_568c76107d4e", "e24fd2bd-e87a-41ee-a91a-e5eef8f7d6d7" => "component_variable_e24fd2bd_e87a_41ee_a91a_e5eef8f7d6d7", "1e034b8c-7f7a-4505-830c-ed12ac608c6a" => "component_variable_1e034b8c_7f7a_4505_830c_ed12ac608c6a", "3ce77ba2-fdff-4656-9b51-8257a78f2bf3" => "component_variable_3ce77ba2_fdff_4656_9b51_8257a78f2bf3", "ae3580df-0054-4944-90f8-e2736dacde2c" => "component_variable_ae3580df_0054_4944_90f8_e2736dacde2c", "e3c6e040-d3d5-48a8-9727-f752571e9354" => "component_variable_e3c6e040_d3d5_48a8_9727_f752571e9354"], "9320f557-e16a-4fea-a942-a2f7750002c0", ""), "html", null, true);
        yield " ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_container"), "html", null, true);
        yield " <div class=\"coh-container coh-style-padding-top-bottom-large coh-style-focusable-content coh-container-boxed\" > ";
        if ($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->isActiveTheme("cohesion_theme")) {
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 1), "html", null, true);
        }
        yield " </div> ";
        $context["component_variable_f9f11fad_85d9_46d9_adc8_7630861fbdac_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("<p><span>©2020</span></p>", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield " ";
        $context["component_variable_f9f11fad_85d9_46d9_adc8_7630861fbdac_textFormat"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("cohesion", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield " ";
        $context["component_variable_5e8437ec_afc1_49fe_8bbc_0323706449a1"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("coh-style-footer-light-theme", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield " ";
        $context["component_variable_32c0b885_cb2d_48cd_a01f_607b86ac4253"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("menu-position-desktop--center", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield " ";
        $context["component_variable_e73f0dbc_2e2a_45b1_95d0_f511c1034072"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->tokenReplace("[media-reference:file:ca2c6d1c-d114-4550-bdd8-8bfecdd47605]", ["media-reference" => ($context["media_reference"] ?? null)], $context, true), "html", null, true);
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield " ";
        $context["component_variable_ef3cfec8_02e4_493e_ba10_1d535f83f192"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("Footer logo", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield " ";
        $context["component_variable_795dba23_c8de_42f4_be93_d08b58bee96d"] = 79005678867;
        yield " ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderComponent("cpt_site_footer", true, $context, ["f9f11fad-85d9-46d9-adc8-7630861fbdac" => ["text" => "component_variable_f9f11fad_85d9_46d9_adc8_7630861fbdac_text", "textFormat" => "component_variable_f9f11fad_85d9_46d9_adc8_7630861fbdac_textFormat"], "5e8437ec-afc1-49fe-8bbc-0323706449a1" => "component_variable_5e8437ec_afc1_49fe_8bbc_0323706449a1", "32c0b885-cb2d-48cd-a01f-607b86ac4253" => "component_variable_32c0b885_cb2d_48cd_a01f_607b86ac4253", "e73f0dbc-2e2a-45b1-95d0-f511c1034072" => "component_variable_e73f0dbc_2e2a_45b1_95d0_f511c1034072", "ef3cfec8-02e4-493e-ba10-1d535f83f192" => "component_variable_ef3cfec8_02e4_493e_ba10_1d535f83f192", "795dba23-c8de-42f4-be93-d08b58bee96d" => "component_variable_795dba23_c8de_42f4_be93_d08b58bee96d"], "8d72fbe2-3a0f-4639-9613-6d8130f65da3", ""), "html", null, true);
        yield " 
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["media_reference", "_context", "page"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "sites/default/files/cohesion/templates/page--cohesion--mstr-tpl-master-template-boxed.html.twig";
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
        return array (  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "sites/default/files/cohesion/templates/page--cohesion--mstr-tpl-master-template-boxed.html.twig", "/var/www/html/web/sites/default/files/cohesion/templates/page--cohesion--mstr-tpl-master-template-boxed.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "trans" => 1, "if" => 1];
        static $filters = ["escape" => 1];
        static $functions = ["attach_library" => 1, "get_content_language" => 1, "processtoken" => 1, "renderComponent" => 1, "isActiveTheme" => 1];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans', 'if'],
                ['escape'],
                ['attach_library', 'get_content_language', 'processtoken', 'renderComponent', 'isActiveTheme'],
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
