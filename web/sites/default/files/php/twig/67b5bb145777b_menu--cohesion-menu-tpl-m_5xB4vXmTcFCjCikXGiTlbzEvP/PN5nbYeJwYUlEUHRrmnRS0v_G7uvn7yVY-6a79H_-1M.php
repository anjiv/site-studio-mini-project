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

/* sites/default/files/cohesion/templates/menu--cohesion-menu-tpl-main-navigation.html.twig */
class __TwigTemplate_73af35b7b56f9d535606af95c98370f6 extends Template
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
            'block343112473' => [$this, 'block_block343112473'],
            'block1622107676' => [$this, 'block_block1622107676'],
            'block533738164' => [$this, 'block_block533738164'],
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
        yield from $this->unwrap()->yieldBlock('block343112473', $context, $blocks);
        yield " 
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["item", "items"]);        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_block343112473(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " ";
        if (( !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "below", [], "any", true, true, true, 1) || (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "below", [], "any", true, true, true, 1) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "below", [], "any", false, false, true, 1)) > 0)))) {
            yield " <ul class=\"coh-menu-list-container coh-unordered-list menu-level-1 coh-ce-bf15d041\">";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["items"] ?? null))));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                $context["inRange"] = true;
                if ((($context["i"] <= Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["items"] ?? null))) && ($context["inRange"] ?? null))) {
                    $context["item"] = (($_v0 = ($context["items"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0[(($_v1 = Twig\Extension\CoreExtension::keys(($context["items"] ?? null))) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1[($context["i"] - 1)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::keys(($context["items"] ?? null)), ($context["i"] - 1), [], "array", false, false, true, 1))] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), (($_v2 = Twig\Extension\CoreExtension::keys(($context["items"] ?? null))) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2[($context["i"] - 1)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::keys(($context["items"] ?? null)), ($context["i"] - 1), [], "array", false, false, true, 1)), [], "array", false, false, true, 1));
                    $context["menuItemAttributes"] = $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getMenuItemAttributes((($_v3 = ($context["item"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess && in_array($_v3::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v3["original_link"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "original_link", [], "array", false, false, true, 1)));
                    yield "<li class=\"coh-menu-list-item coh-ce-73b58dbc js-coh-menu-item";
                    if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", true, true, true, 1) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "external", [], "any", false, false, true, 1) == false)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "routed", [], "any", false, false, true, 1) == true)) && ($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<current>") == $this->extensions['Drupal\Core\Template\TwigExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "routeName", [], "any", false, false, true, 1), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "routeParameters", [], "any", false, false, true, 1), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "options", [], "any", false, false, true, 1))))) {
                        yield " is-active";
                    }
                    if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "below", [], "any", true, true, true, 1) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "below", [], "any", false, false, true, 1)) > 0))) {
                        yield " has-children";
                    }
                    if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "in_active_trail", [], "any", true, true, true, 1) && CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "in_active_trail", [], "any", false, false, true, 1))) {
                        yield " in-active-trail";
                    }
                    yield "\" data-coh-settings='{\"sm\":\"hidden\"}' ";
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
                        yield " ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/global_libraries.jquery_ui_effect_fade"), "html", null, true);
                        yield " ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/global_libraries.jquery_ui_effect_blind"), "html", null, true);
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
                        yield " data-coh-settings='{ \"xl\":{\"link_interaction\":\"toggle-on-hover\",\"animationType\":\"fade\",\"animationEasing\":\"easeInOutCubic\",\"animationTarget\":\".menu-level-2-wrapper\",\"animationDuration\":300},\"sm\":{\"link_interaction\":\"toggle-on-click\",\"animationType\":\"blind\",\"animationEasing\":\"easeInOutCubic\",\"animationTarget\":\".menu-level-2-wrapper\",\"animationDuration\":300,\"animationDirection\":\"up\"} }' class=\"coh-link coh-ce-a328fbce js-coh-menu-item-link";
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
                        yield "> ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_container"), "html", null, true);
                        yield " <div class=\"coh-container menu-level-2-wrapper coh-ce-9e7f72ef\" > ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_container"), "html", null, true);
                        yield " <div class=\"coh-container coh-ce-9891be7f coh-container-boxed\" > ";
                        yield from $this->unwrap()->yieldBlock('block1622107676', $context, $blocks);
                        yield " </div> </div>";
                        $context = $_v4;
                    }
                    yield "</li>";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield "</ul> ";
        }
        yield " ";
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_block1622107676(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " ";
        if (( !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "below", [], "any", true, true, true, 1) || (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "below", [], "any", true, true, true, 1) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "below", [], "any", false, false, true, 1)) > 0)))) {
            yield " <ul class=\"coh-menu-list-container coh-unordered-list menu-level-2 coh-ce-41faece7\">";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["items"] ?? null))));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                $context["inRange"] = true;
                if ((($context["i"] <= Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["items"] ?? null))) && ($context["inRange"] ?? null))) {
                    $context["item"] = (($_v6 = ($context["items"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess && in_array($_v6::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v6[(($_v7 = Twig\Extension\CoreExtension::keys(($context["items"] ?? null))) && is_array($_v7) || $_v7 instanceof ArrayAccess && in_array($_v7::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v7[($context["i"] - 1)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::keys(($context["items"] ?? null)), ($context["i"] - 1), [], "array", false, false, true, 1))] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), (($_v8 = Twig\Extension\CoreExtension::keys(($context["items"] ?? null))) && is_array($_v8) || $_v8 instanceof ArrayAccess && in_array($_v8::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v8[($context["i"] - 1)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::keys(($context["items"] ?? null)), ($context["i"] - 1), [], "array", false, false, true, 1)), [], "array", false, false, true, 1));
                    $context["menuItemAttributes"] = $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getMenuItemAttributes((($_v9 = ($context["item"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess && in_array($_v9::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v9["original_link"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "original_link", [], "array", false, false, true, 1)));
                    yield "<li class=\"coh-menu-list-item coh-ce-4c431097 js-coh-menu-item";
                    if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", true, true, true, 1) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "external", [], "any", false, false, true, 1) == false)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "routed", [], "any", false, false, true, 1) == true)) && ($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<current>") == $this->extensions['Drupal\Core\Template\TwigExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "routeName", [], "any", false, false, true, 1), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "routeParameters", [], "any", false, false, true, 1), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "options", [], "any", false, false, true, 1))))) {
                        yield " is-active";
                    }
                    if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "below", [], "any", true, true, true, 1) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "below", [], "any", false, false, true, 1)) > 0))) {
                        yield " has-children";
                    }
                    if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "in_active_trail", [], "any", true, true, true, 1) && CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "in_active_trail", [], "any", false, false, true, 1))) {
                        yield " in-active-trail";
                    }
                    yield "\" data-coh-settings='{\"xl\":\"hidden\"}' ";
                    if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", true, true, true, 1) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "external", [], "any", false, false, true, 1) == false)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "routed", [], "any", false, false, true, 1)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "routeName", [], "any", false, false, true, 1) == "<front>"))) {
                        yield "data-drupal-link-system-path=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "routeName", [], "any", false, false, true, 1), "html", null, true);
                        yield "\"";
                    }
                    yield ">";
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "below", [], "any", true, true, true, 1)) {
                        $_v10 = $context;
                        $_v11 = ["items" => CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "below", [], "any", false, false, true, 1)];
                        if (!is_iterable($_v11)) {
                            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 1, $this->getSourceContext());
                        }
                        $_v11 = CoreExtension::toArray($_v11);
                        $context = $_v11 + $context + $this->env->getGlobals();
                        $context["menuItemElement"] = "a";
                        yield " ";
                        if ((((((($context["menuItemElement"] ?? null) == "a") && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "external", [], "any", false, false, true, 1) == false)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "routed", [], "any", false, false, true, 1) == true)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "routeName", [], "any", false, false, true, 1) == "<nolink>")) && true)) {
                            yield " ";
                            $context["menuItemElement"] = "span";
                            yield " ";
                        }
                        yield " ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/global_libraries.jquery_ui_effect_none"), "html", null, true);
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
                        yield " data-coh-settings='{ \"xl\":{\"link_interaction\":\"toggle-on-hover\",\"animationType\":\"none\"} }' class=\"coh-link coh-ce-5d9b5c92 js-coh-menu-item-link";
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
                        yield "> ";
                        yield from $this->unwrap()->yieldBlock('block533738164', $context, $blocks);
                        $context = $_v10;
                    }
                    yield "</li>";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield "</ul> ";
        }
        yield " ";
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_block533738164(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " ";
        if (( !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "below", [], "any", true, true, true, 1) || (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "below", [], "any", true, true, true, 1) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "below", [], "any", false, false, true, 1)) > 0)))) {
            yield " <ul class=\"coh-menu-list-container coh-unordered-list menu-level-3 coh-ce-7666841d\">";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["items"] ?? null))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                $context["inRange"] = true;
                if ((($context["i"] <= Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["items"] ?? null))) && ($context["inRange"] ?? null))) {
                    $context["item"] = (($_v12 = ($context["items"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess && in_array($_v12::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v12[(($_v13 = Twig\Extension\CoreExtension::keys(($context["items"] ?? null))) && is_array($_v13) || $_v13 instanceof ArrayAccess && in_array($_v13::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v13[($context["i"] - 1)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::keys(($context["items"] ?? null)), ($context["i"] - 1), [], "array", false, false, true, 1))] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), (($_v14 = Twig\Extension\CoreExtension::keys(($context["items"] ?? null))) && is_array($_v14) || $_v14 instanceof ArrayAccess && in_array($_v14::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v14[($context["i"] - 1)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::keys(($context["items"] ?? null)), ($context["i"] - 1), [], "array", false, false, true, 1)), [], "array", false, false, true, 1));
                    $context["menuItemAttributes"] = $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getMenuItemAttributes((($_v15 = ($context["item"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess && in_array($_v15::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v15["original_link"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "original_link", [], "array", false, false, true, 1)));
                    yield "<li class=\"coh-menu-list-item coh-ce-d344be45 js-coh-menu-item";
                    if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", true, true, true, 1) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "external", [], "any", false, false, true, 1) == false)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "routed", [], "any", false, false, true, 1) == true)) && ($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<current>") == $this->extensions['Drupal\Core\Template\TwigExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "routeName", [], "any", false, false, true, 1), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "routeParameters", [], "any", false, false, true, 1), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "options", [], "any", false, false, true, 1))))) {
                        yield " is-active";
                    }
                    if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "below", [], "any", true, true, true, 1) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "below", [], "any", false, false, true, 1)) > 0))) {
                        yield " has-children";
                    }
                    if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "in_active_trail", [], "any", true, true, true, 1) && CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "in_active_trail", [], "any", false, false, true, 1))) {
                        yield " in-active-trail";
                    }
                    yield "\" data-coh-settings='{\"xl\":\"hidden\"}' ";
                    if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", true, true, true, 1) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "external", [], "any", false, false, true, 1) == false)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "routed", [], "any", false, false, true, 1)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "routeName", [], "any", false, false, true, 1) == "<front>"))) {
                        yield "data-drupal-link-system-path=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "routeName", [], "any", false, false, true, 1), "html", null, true);
                        yield "\"";
                    }
                    yield ">";
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "below", [], "any", true, true, true, 1)) {
                        $_v16 = $context;
                        $_v17 = ["items" => CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "below", [], "any", false, false, true, 1)];
                        if (!is_iterable($_v17)) {
                            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 1, $this->getSourceContext());
                        }
                        $_v17 = CoreExtension::toArray($_v17);
                        $context = $_v17 + $context + $this->env->getGlobals();
                        $context["menuItemElement"] = "a";
                        yield " ";
                        if ((((((($context["menuItemElement"] ?? null) == "a") && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "external", [], "any", false, false, true, 1) == false)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "routed", [], "any", false, false, true, 1) == true)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "routeName", [], "any", false, false, true, 1) == "<nolink>")) && true)) {
                            yield " ";
                            $context["menuItemElement"] = "span";
                            yield " ";
                        }
                        yield " ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/global_libraries.jquery_ui_effect_none"), "html", null, true);
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
                        yield " data-coh-settings='{ \"xl\":{\"link_interaction\":\"toggle-on-hover\",\"animationType\":\"none\"} }' class=\"coh-link coh-ce-769e1d0 js-coh-menu-item-link";
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
                        $context = $_v16;
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
        return "sites/default/files/cohesion/templates/menu--cohesion-menu-tpl-main-navigation.html.twig";
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
        return array (  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "sites/default/files/cohesion/templates/menu--cohesion-menu-tpl-main-navigation.html.twig", "/var/www/html/web/sites/default/files/cohesion/templates/menu--cohesion-menu-tpl-main-navigation.html.twig");
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
