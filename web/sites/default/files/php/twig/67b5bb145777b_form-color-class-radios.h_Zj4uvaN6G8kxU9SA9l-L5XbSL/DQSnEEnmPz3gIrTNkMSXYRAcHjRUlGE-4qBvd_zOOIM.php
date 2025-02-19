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

/* modules/contrib/cohesion/modules/cohesion_elements/templates/form-color-class-radios.html.twig */
class __TwigTemplate_00516c8d5ffc62effb36dd5641c96e0f extends Template
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
        // line 16
        $context["classes"] = ["js-form-color-classes", "form-color-classes", "coh-category-color-fieldset-inner"];
        // line 22
        yield "<fieldset class=\"coh-category-color-fieldset\">
  <legend class=\"coh-category-color-legend\">";
        // line 23
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Color"));
        yield "</legend>
  <div";
        // line 24
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 24), "html", null, true);
        yield ">
    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((($_v0 = ($context["element"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["#options"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["element"] ?? null), "#options", [], "array", false, false, true, 25)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 26
            yield "      <div class=\"coh-category-color-item ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["item"], "html", null, true);
            yield "\">
          <input class=\"coh-category-color-input\" id=\"coh-component-";
            // line 27
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["item"], "html", null, true);
            yield "\" name=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v1 = ($context["element"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1["#name"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["element"] ?? null), "#name", [], "array", false, false, true, 27)), "html", null, true);
            yield "\" type=\"radio\" value=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["item"], "html", null, true);
            yield "\" ";
            if (((($_v2 = ($context["element"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2["#value"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["element"] ?? null), "#value", [], "array", false, false, true, 27)) == $context["item"])) {
                yield "checked";
            }
            yield "/>
          <label class=\"coh-category-color-label\" for=\"coh-component-";
            // line 28
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["item"], "html", null, true);
            yield "\"><span class=\"visually-hidden\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["item"], "html", null, true);
            yield "</span></label>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        yield "  </div>
</fieldset>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "element"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/contrib/cohesion/modules/cohesion_elements/templates/form-color-class-radios.html.twig";
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
        return array (  89 => 31,  78 => 28,  66 => 27,  61 => 26,  57 => 25,  53 => 24,  49 => 23,  46 => 22,  44 => 16,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/contrib/cohesion/modules/cohesion_elements/templates/form-color-class-radios.html.twig", "/var/www/html/web/modules/contrib/cohesion/modules/cohesion_elements/templates/form-color-class-radios.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 16, "for" => 25, "if" => 27];
        static $filters = ["t" => 23, "escape" => 24];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['t', 'escape'],
                [],
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
