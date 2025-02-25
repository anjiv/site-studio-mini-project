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

/* sites/default/files/cohesion/templates/component--cohesion-cpt-site-footer.html.twig */
class __TwigTemplate_9e5e752ed287c0281789892741d35a18 extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/element_templates.drupal-menu"), "html", null, true);
        yield " ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/global_libraries.matchHeight"), "html", null, true);
        yield " ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/global_libraries.parallax_scrolling"), "html", null, true);
        yield " ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/global_libraries.cohMatchHeights"), "html", null, true);
        yield " ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/element_templates.image"), "html", null, true);
        yield " ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/element_templates.link"), "html", null, true);
        yield " ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_container"), "html", null, true);
        yield " <footer class=\"coh-container ssa-component coh-component ssa-component-instance-";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["componentUuid"] ?? null), "html", null, true);
        yield " coh-component-instance-";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["componentUuid"] ?? null), "html", null, true);
        yield " ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "5e8437ec-afc1-49fe-8bbc-0323706449a1"));
        yield " ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "32c0b885-cb2d-48cd-a01f-607b86ac4253"));
        yield " coh-style-focusable-content\" > ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_container"), "html", null, true);
        yield " <div class=\"coh-container primary-row coh-ce-cpt_site_footer-7baafbb5\" > ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_container"), "html", null, true);
        yield " <nav class=\"coh-container footer-menu coh-ce-cpt_site_footer-bb438e8f\" > ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_drupal_menu"), "html", null, true);
        yield " ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderMenu("footer", "menu_tpl_footer", false, 1), "html", null, true);
        yield " </nav> ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_container"), "html", null, true);
        yield " <div class=\"coh-container coh-ce-cpt_site_footer-e0b2734d\" > ";
        $context["component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_0_b7b48e2f_427c_41dd_8b1f_480be3bce017"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("vkontakte", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield " ";
        $context["component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_0_523afe0e_2cab_42d3_a845_53944be67431"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("https://www.google.com/", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield " ";
        $context["component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_0_41e4bef4_fb24_4953_9bc1_e7896b7e2507"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("Follow us on vkontakte", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield " ";
        $context["component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_1_b7b48e2f_427c_41dd_8b1f_480be3bce017"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("instagram", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield " ";
        $context["component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_1_523afe0e_2cab_42d3_a845_53944be67431"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("https://www.instagram.com/acquia", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield " ";
        $context["component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_1_41e4bef4_fb24_4953_9bc1_e7896b7e2507"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("Follow us on Instagram", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield " ";
        $context["component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_2_b7b48e2f_427c_41dd_8b1f_480be3bce017"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("facebook", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield " ";
        $context["component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_2_523afe0e_2cab_42d3_a845_53944be67431"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("https://www.facebook.com/acquia", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield " ";
        $context["component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_2_41e4bef4_fb24_4953_9bc1_e7896b7e2507"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("Follow us on Facebook", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield " ";
        $context["component_variable_b7b48e2f_427c_41dd_8b1f_480be3bce017"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("facebook", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield " ";
        $context["component_variable_523afe0e_2cab_42d3_a845_53944be67431"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("https://www.facebook.com/acquia", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield " ";
        $context["component_variable_41e4bef4_fb24_4953_9bc1_e7896b7e2507"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("Follow us on Facebook", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield " ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderComponent("cpt_social_links", true, $context, ["8fa56baf-1a4e-482a-9631-c69d45e3079b" => [["b7b48e2f-427c-41dd-8b1f-480be3bce017" => "component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_0_b7b48e2f_427c_41dd_8b1f_480be3bce017", "523afe0e-2cab-42d3-a845-53944be67431" => "component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_0_523afe0e_2cab_42d3_a845_53944be67431", "41e4bef4-fb24-4953-9bc1-e7896b7e2507" => "component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_0_41e4bef4_fb24_4953_9bc1_e7896b7e2507"], ["b7b48e2f-427c-41dd-8b1f-480be3bce017" => "component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_1_b7b48e2f_427c_41dd_8b1f_480be3bce017", "523afe0e-2cab-42d3-a845-53944be67431" => "component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_1_523afe0e_2cab_42d3_a845_53944be67431", "41e4bef4-fb24-4953-9bc1-e7896b7e2507" => "component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_1_41e4bef4_fb24_4953_9bc1_e7896b7e2507"], ["b7b48e2f-427c-41dd-8b1f-480be3bce017" => "component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_2_b7b48e2f_427c_41dd_8b1f_480be3bce017", "523afe0e-2cab-42d3-a845-53944be67431" => "component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_2_523afe0e_2cab_42d3_a845_53944be67431", "41e4bef4-fb24-4953-9bc1-e7896b7e2507" => "component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_2_41e4bef4_fb24_4953_9bc1_e7896b7e2507"]], "b7b48e2f-427c-41dd-8b1f-480be3bce017" => "component_variable_b7b48e2f_427c_41dd_8b1f_480be3bce017", "523afe0e-2cab-42d3-a845-53944be67431" => "component_variable_523afe0e_2cab_42d3_a845_53944be67431", "41e4bef4-fb24-4953-9bc1-e7896b7e2507" => "component_variable_41e4bef4_fb24_4953_9bc1_e7896b7e2507"], "dd069b1c-3a85-4302-bcb5-d17b11ac82d0", ""), "html", null, true);
        yield " </div> </div> ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_container"), "html", null, true);
        yield " <div class=\"coh-container secondary-row coh-ce-cpt_site_footer-33575303\" > ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_container"), "html", null, true);
        yield " <div class=\"coh-container coh-ce-cpt_site_footer-821945a9\" > ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_wysiwyg"), "html", null, true);
        yield " <div class=\"coh-wysiwyg copyright-text\" ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "hasPermission", ["access visual page builder"], "method", false, false, true, 1) &&  !array_key_exists("component_content", $context))) {
            yield " data-ssa-field-uuid=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderFieldUuid($context, "f9f11fad-85d9-46d9-adc8-7630861fbdac", "Array"), "html", null, true);
            yield "\" data-ssa-form-type=\"form-wysiwyg\"";
        }
        yield " > ";
        $context["wysiwyg"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "f9f11fad-85d9-46d9-adc8-7630861fbdac", "#text"), "html", null, true);
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield " ";
        $context["text_format"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "f9f11fad-85d9-46d9-adc8-7630861fbdac", "#textFormat"), "html", null, true);
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield " ";
        $context["token_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "f9f11fad-85d9-46d9-adc8-7630861fbdac", ""), "html", null, true);
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield " ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->formatWysiwyg(($context["wysiwyg"] ?? null), ($context["text_format"] ?? null), ($context["token_text"] ?? null)), "html", null, true);
        yield " </div> ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_link"), "html", null, true);
        yield " <a href=\"javascript:void(0)\" class=\"coh-link\" > ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_image"), "html", null, true);
        yield " <img class=\"coh-image coh-image-responsive-xs\" src=\"";
        $context["src"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "e73f0dbc-2e2a-45b1-95d0-f511c1034072"));
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        $context["imagestyle"] = "";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->cohesionImageStyle(($context["src"] ?? null), ($context["imagestyle"] ?? null)), "html", null, true);
        yield "\" ";
        if (($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "ef3cfec8-02e4-493e-ba10-1d535f83f192") == "")) {
            yield "alt";
        } else {
            yield "alt=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "ef3cfec8-02e4-493e-ba10-1d535f83f192"));
            yield "\"";
        }
        yield " /> </a> </div> ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_container"), "html", null, true);
        yield " <div class=\"coh-container footer-contact coh-ce-cpt_site_footer-100f69e3\" > ";
        $context["inlineElementContent"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "795dba23-c8de-42f4-be93-d08b58bee96d"));
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield " <span class=\"coh-inline-element\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["inlineElementContent"] ?? null), "html", null, true);
        yield "</span> </div> </div> </footer> 
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["componentUuid", "_context", "user", "component_content"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "sites/default/files/cohesion/templates/component--cohesion-cpt-site-footer.html.twig";
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
        return new Source("", "sites/default/files/cohesion/templates/component--cohesion-cpt-site-footer.html.twig", "/var/www/html/web/sites/default/files/cohesion/templates/component--cohesion-cpt-site-footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "trans" => 1, "if" => 1];
        static $filters = ["escape" => 1, "raw" => 1];
        static $functions = ["attach_library" => 1, "getComponentFieldValue" => 1, "render_menu" => 1, "get_content_language" => 1, "renderComponent" => 1, "render_field_uuid" => 1, "format_wysiwyg" => 1, "cohesion_image_style" => 1];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans', 'if'],
                ['escape', 'raw'],
                ['attach_library', 'getComponentFieldValue', 'render_menu', 'get_content_language', 'renderComponent', 'render_field_uuid', 'format_wysiwyg', 'cohesion_image_style'],
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
