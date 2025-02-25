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

/* __string_template__d03c1883687e8df011b10a64b50b7d47 */
class __TwigTemplate_997f942f374ee69939234381da100cab extends Template
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
        $context["component_variable_ad025039_96c5_4cce_a27b_48778043471c"] = false;
        yield " ";
        $context["component_variable_50bae73f_99e4_446b_a738_9939a3dade60"] = new Markup("Medium length placeholder heading.", $this->env->getCharset());
        yield " ";
        $context["component_variable_e8f77e4e_3de9_47cc_b229_7040a4f78719"] = new Markup("h2", $this->env->getCharset());
        yield " ";
        $context["component_variable_42c2324a_e7ee_45b6_ab1e_f5dfba48bfb2"] = new Markup("align-text-left", $this->env->getCharset());
        yield " ";
        $context["component_variable_fa5d575b_1d6e_44f0_a99e_1a2f7688bc27"] = new Markup("dark-heading", $this->env->getCharset());
        yield " ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderComponent("cpt_heading", false, $context, ["ad025039-96c5-4cce-a27b-48778043471c" => "component_variable_ad025039_96c5_4cce_a27b_48778043471c", "50bae73f-99e4-446b-a738-9939a3dade60" => "component_variable_50bae73f_99e4_446b_a738_9939a3dade60", "e8f77e4e-3de9-47cc-b229-7040a4f78719" => "component_variable_e8f77e4e_3de9_47cc_b229_7040a4f78719", "42c2324a-e7ee-45b6-ab1e-f5dfba48bfb2" => "component_variable_42c2324a_e7ee_45b6_ab1e_f5dfba48bfb2", "fa5d575b-1d6e-44f0-a99e-1a2f7688bc27" => "component_variable_fa5d575b_1d6e_44f0_a99e_1a2f7688bc27"], "47ad2cba-70a9-43b8-b86f-1f6f82f32759", ""), "html", null, true);
        yield " 
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_context"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__d03c1883687e8df011b10a64b50b7d47";
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
        return new Source("", "__string_template__d03c1883687e8df011b10a64b50b7d47", "");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1];
        static $filters = ["escape" => 1];
        static $functions = ["attach_library" => 1, "renderComponent" => 1];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['escape'],
                ['attach_library', 'renderComponent'],
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
