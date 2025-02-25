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

/* sites/default/files/cohesion/templates/menu--cohesion-menu-tpl-footer.html.twig */
class __TwigTemplate_c1cb82110207dfb21222a34d3415d7b9 extends Template
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
            'block4246666844' => [$this, 'block_block4246666844'],
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
        yield from $this->unwrap()->yieldBlock('block4246666844', $context, $blocks);
        yield " 
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["item", "items"]);        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_block4246666844(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " ";
        if (( !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "below", [], "any", true, true, true, 1) || (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "below", [], "any", true, true, true, 1) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "below", [], "any", false, false, true, 1)) > 0)))) {
            yield " <ul class=\"coh-menu-list-container coh-unordered-list coh-ce-afebe5c4\">";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["items"] ?? null))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                $context["inRange"] = true;
                if ((($context["i"] <= Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["items"] ?? null))) && ($context["inRange"] ?? null))) {
                    $context["item"] = (($_v0 = ($context["items"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0[(($_v1 = Twig\Extension\CoreExtension::keys(($context["items"] ?? null))) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1[($context["i"] - 1)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::keys(($context["items"] ?? null)), ($context["i"] - 1), [], "array", false, false, true, 1))] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), (($_v2 = Twig\Extension\CoreExtension::keys(($context["items"] ?? null))) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2[($context["i"] - 1)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::keys(($context["items"] ?? null)), ($context["i"] - 1), [], "array", false, false, true, 1)), [], "array", false, false, true, 1));
                    $context["menuItemAttributes"] = $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getMenuItemAttributes((($_v3 = ($context["item"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess && in_array($_v3::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v3["original_link"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "original_link", [], "array", false, false, true, 1)));
                    yield "<li class=\"coh-menu-list-item coh-ce-6d7dc078 js-coh-menu-item";
                    if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", true, true, true, 1) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "external", [], "any", false, false, true, 1) == false)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "routed", [], "any", false, false, true, 1) == true)) && ($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<current>") == $this->extensions['Drupal\Core\Template\TwigExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "routeName", [], "any", false, false, true, 1), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "routeParameters", [], "any", false, false, true, 1), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "options", [], "any", false, false, true, 1))))) {
                        yield " is-active";
                    }
                    if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "below", [], "any", true, true, true, 1) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "below", [], "any", false, false, true, 1)) > 0))) {
                        yield " has-children";
                    }
                    if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "in_active_trail", [], "any", true, true, true, 1) && CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "in_active_trail", [], "any", false, false, true, 1))) {
                        yield " in-active-trail";
                    }
                    yield "\" data-coh-settings='{\"md\":\"hidden\"}' ";
                    if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", true, true, true, 1) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "external", [], "any", false, false, true, 1) == false)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "routed", [], "any", false, false, true, 1)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "routeName", [], "any", false, false, true, 1) == "<front>"))) {
                        yield "data-drupal-link-system-path=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "routeName", [], "any", false, false, true, 1), "html", null, true);
                        yield "\"";
                    }
                    yield ">";
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "below", [], "any", true, true, true, 1)) {
                        $_v4 = $context;
                        $_v5 = ["items" => CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "below", [], "any", false, false, true, 1)];
                        if (!is_iterable($_v5)) {
                            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 1, $this->getSourceContext());
                        }
                        $_v5 = CoreExtension::toArray($_v5);
                        $context = $_v5 + $context + $this->env->getGlobals();
                        $context["menuItemElement"] = "a";
                        yield " ";
                        if ((((((($context["menuItemElement"] ?? null) == "a") && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "external", [], "any", false, false, true, 1) == false)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "routed", [], "any", false, false, true, 1) == true)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "routeName", [], "any", false, false, true, 1) == "<nolink>")) && true)) {
                            yield " ";
                            $context["menuItemElement"] = "span";
                            yield " ";
                        }
                        yield " <";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["menuItemElement"] ?? null), "html", null, true);
                        yield " ";
                        if ((($context["menuItemElement"] ?? null) == "a")) {
                            yield "href=\"";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "html", null, true);
                            yield "\"";
                        }
                        yield " ";
                        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["menuItemAttributes"] ?? null), "all", [], "any", false, true, true, 1), "target", [], "any", true, true, true, 1)) {
                            yield " target=\"";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["menuItemAttributes"] ?? null), "all", [], "any", false, false, true, 1), "target", [], "any", false, false, true, 1), "html", null, true);
                            yield "\"";
                        }
                        yield " ";
                        if (CoreExtension::getAttribute($this->env, $this->source, ($context["menuItemAttributes"] ?? null), "custom", [], "any", true, true, true, 1)) {
                            yield " ";
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["menuItemAttributes"] ?? null), "custom", [], "any", false, false, true, 1));
                            foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
                                yield " ";
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["key"], "html", null, true);
                                yield "=\"";
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["attribute"], "html", null, true);
                                yield "\" ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['key'], $context['attribute'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            yield " ";
                        }
                        yield " data-coh-settings='{ \"md\":{\"link_interaction\":\"click-through-to-link\"} }' class=\"coh-link coh-ce-16a85bec js-coh-menu-item-link";
                        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["menuItemAttributes"] ?? null), "all", [], "any", false, true, true, 1), "class", [], "any", true, true, true, 1)) {
                            yield " ";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["menuItemAttributes"] ?? null), "all", [], "any", false, false, true, 1), "class", [], "any", false, false, true, 1), " "), "html", null, true);
                        }
                        yield "\" ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "original_link", [], "any", false, true, true, 1), "getDescription", [], "method", true, true, true, 1) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "original_link", [], "any", false, false, true, 1), "getDescription", [], "method", false, false, true, 1) != ""))) {
                            yield " title=\"";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "original_link", [], "any", false, false, true, 1), "getDescription", [], "method", false, false, true, 1), "html", null, true);
                            yield "\"";
                        }
                        yield ">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, true, 1), "html", null, true);
                        yield "</";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["menuItemElement"] ?? null), "html", null, true);
                        yield ">";
                        $context = $_v4;
                    }
                    yield "</li>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield "</ul> ";
        }
        yield " ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "sites/default/files/cohesion/templates/menu--cohesion-menu-tpl-footer.html.twig";
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
        return array (  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "sites/default/files/cohesion/templates/menu--cohesion-menu-tpl-footer.html.twig", "/var/www/html/web/sites/default/files/cohesion/templates/menu--cohesion-menu-tpl-footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["block" => 1, "if" => 1, "for" => 1, "set" => 1, "with" => 1];
        static $filters = ["escape" => 1, "length" => 1, "keys" => 1, "join" => 1];
        static $functions = ["attach_library" => 1, "range" => 1, "get_menu_item_attributes" => 1, "path" => 1];

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if', 'for', 'set', 'with'],
                ['escape', 'length', 'keys', 'join'],
                ['attach_library', 'range', 'get_menu_item_attributes', 'path'],
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
