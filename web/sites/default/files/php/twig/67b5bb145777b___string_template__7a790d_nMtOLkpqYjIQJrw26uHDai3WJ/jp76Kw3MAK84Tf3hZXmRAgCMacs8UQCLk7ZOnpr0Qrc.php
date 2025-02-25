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

/* __string_template__7a790d3d529476e749224759f5833a43 */
class __TwigTemplate_08b6474dd7b8413a49138f0918bd74aa extends Template
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
        yield "@media (min-width: 1400px) {
  ul {
    margin-bottom: 1.5rem;
  }
}
@media (min-width: 1400px) {
  ul.toolbar-menu li {
    margin: 0;
    list-style-type: none;
    font-weight: normal;
  }
}
@media (min-width: 1400px) {
  ul.toolbar-menu li:before {
    content: normal;
  }
}
@media (min-width: 1400px) {
  ul.contextual-links li {
    list-style-type: none;
    font-weight: normal;
  }
}
@media (min-width: 1400px) {
  ul.contextual-links li:before {
    content: normal;
  }
}
@media (min-width: 1400px) {
  ul.cke_panel_list li {
    list-style-type: none;
    font-weight: normal;
  }
}
@media (min-width: 1400px) {
  ul.cke_panel_list li:before {
    content: normal;
  }
}
@media (min-width: 1400px) {
  ul.dx8-tabs li {
    list-style-type: none;
    font-weight: normal;
  }
}
@media (min-width: 1400px) {
  ul.dx8-tabs li:before {
    content: normal;
  }
}
@media (min-width: 1400px) {
  ul li {
    line-height: 1.5;
    margin-bottom: 1rem;
    margin-left: 2rem;
    list-style-type: disc;
    list-style-position: outside;
  }
}
@media (min-width: 1400px) {
  ul li ul {
    margin-top: 1.5rem;
    margin-bottom: 1.5rem;
  }
}
@media (min-width: 1400px) {
  ul li ul li {
    margin-left: 1rem;
    list-style-type: circle;
  }
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__7a790d3d529476e749224759f5833a43";
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
        return new Source("", "__string_template__7a790d3d529476e749224759f5833a43", "");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = [];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
