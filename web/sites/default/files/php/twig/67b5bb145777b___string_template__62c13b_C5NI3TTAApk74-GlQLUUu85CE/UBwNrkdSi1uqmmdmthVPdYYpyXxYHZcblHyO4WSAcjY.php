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

/* __string_template__62c13b87a268fb01e5dcbda9efd46759 */
class __TwigTemplate_b9d05a04dce91d005e92fb612e51a39c extends Template
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
        yield "@media (min-width: 1024px) {
  .coh-preview {
    background-color: rgb(255, 255, 255);
  }
}
@media (min-width: 1024px) {
  .coh-preview .utilities-bar-horizontal {
    background-color: rgb(242, 242, 242);
  }
}
@media (min-width: 1024px) {
  .coh-preview .utilities-bar-horizontal .utilities-menu a {
    color: rgb(0, 0, 0);
  }
}
@media (min-width: 1024px) {
  .coh-preview .utilities-bar-horizontal .utilities-menu a:hover {
    color: rgb(38, 163, 221);
  }
}
@media (min-width: 1400px) {
  .coh-preview .utilities-bar-horizontal .social-links a {
    color: rgb(38, 163, 221);
  }
}
@media (min-width: 1400px) {
  .coh-preview .utilities-bar-horizontal .social-links a:hover {
    color: rgb(112, 195, 233);
  }
}
@media (min-width: 1400px) {
  .coh-preview .utilities-bar-vertical {
    background-color: rgb(242, 242, 242);
  }
}
@media (min-width: 1400px) {
  .coh-preview .utilities-bar-vertical .utilities-menu a {
    color: rgb(0, 0, 0);
  }
}
@media (min-width: 1400px) {
  .coh-preview .utilities-bar-vertical .utilities-menu a:hover {
    color: rgb(38, 163, 221);
  }
}
@media (min-width: 1400px) {
  .coh-preview .utilities-bar-vertical .social-links {
    background-color: rgb(255, 255, 255);
    border-bottom-width: 0.0625rem;
    border-bottom-style: solid;
    border-bottom-color: rgb(219, 219, 220);
  }
}
@media (min-width: 1400px) {
  .coh-preview .utilities-bar-vertical .social-links a {
    color: rgb(38, 163, 221);
  }
}
@media (min-width: 1400px) {
  .coh-preview .utilities-bar-vertical .social-links a:hover {
    color: rgb(112, 195, 233);
  }
}
@media (min-width: 1400px) {
  .coh-preview .main-menu-toggle-button {
    color: rgb(0, 0, 0);
  }
}
@media (min-width: 1400px) {
  .coh-preview .main-menu-toggle-button:hover {
    color: rgb(38, 163, 221);
  }
}
@media (min-width: 768px) {
  .coh-preview .main-menu-wrapper {
    background-color: rgb(255, 255, 255);
    -webkit-box-shadow: inset 0 0.0625rem 0 0 rgb(219, 219, 220);
            box-shadow: inset 0 0.0625rem 0 0 rgb(219, 219, 220);
  }
}
@media (min-width: 768px) {
  .coh-preview .main-menu .menu-level-1 > li {
    -webkit-box-shadow: none;
            box-shadow: none;
  }
}
@media (min-width: 1400px) {
  .coh-preview .main-menu .menu-level-1 > li {
    -webkit-transition: 300ms ease-in-out box-shadow;
    transition: 300ms ease-in-out box-shadow;
    -webkit-box-shadow: inset 0 0 0 0 rgba(0, 0, 0, 0);
            box-shadow: inset 0 0 0 0 rgba(0, 0, 0, 0);
  }
}
@media (min-width: 768px) {
  .coh-preview .main-menu .menu-level-1 > li:hover {
    -webkit-box-shadow: none;
            box-shadow: none;
  }
}
@media (min-width: 1400px) {
  .coh-preview .main-menu .menu-level-1 > li:hover {
    -webkit-box-shadow: inset 0 -0.1875rem 0 0 rgb(38, 163, 221);
            box-shadow: inset 0 -0.1875rem 0 0 rgb(38, 163, 221);
  }
}
@media (min-width: 768px) {
  .coh-preview .main-menu .menu-level-1 > li.is-expanded {
    -webkit-box-shadow: none;
            box-shadow: none;
  }
}
@media (min-width: 1400px) {
  .coh-preview .main-menu .menu-level-1 > li.is-expanded {
    -webkit-box-shadow: inset 0 -0.1875rem 0 0 rgb(38, 163, 221);
            box-shadow: inset 0 -0.1875rem 0 0 rgb(38, 163, 221);
  }
}
@media (min-width: 1400px) {
  .coh-preview .main-menu .menu-level-1 > li.in-active-trail {
    -webkit-box-shadow: inset 0 -0.1875rem 0 0 rgb(38, 163, 221);
            box-shadow: inset 0 -0.1875rem 0 0 rgb(38, 163, 221);
  }
}
@media (min-width: 768px) {
  .coh-preview .main-menu .menu-level-1 > li > a {
    border-bottom-width: 0.0625rem;
    border-bottom-style: solid;
    border-bottom-color: rgb(219, 219, 220);
  }
}
@media (min-width: 1400px) {
  .coh-preview .main-menu .menu-level-1 > li > a {
    color: rgb(0, 0, 0);
    -webkit-transition: color 300ms ease-in-out, 300ms ease-in-out border-color;
    transition: color 300ms ease-in-out, 300ms ease-in-out border-color;
  }
}
@media (min-width: 768px) {
  .coh-preview .main-menu .menu-level-1 > li > a:hover {
    border-bottom-color: rgb(38, 163, 221);
  }
}
@media (min-width: 1400px) {
  .coh-preview .main-menu .menu-level-1 > li > a:hover {
    color: rgb(38, 163, 221);
  }
}
@media (min-width: 1400px) {
  .coh-preview .main-menu .menu-level-1 > li > span {
    color: rgb(0, 0, 0);
  }
}
@media (min-width: 768px) {
  .coh-preview .main-menu .menu-level-2-wrapper > .coh-container-boxed {
    background-color: rgba(0, 0, 0, 0);
  }
}
@media (min-width: 1400px) {
  .coh-preview .main-menu .menu-level-2-wrapper > .coh-container-boxed {
    background-color: rgb(242, 242, 242);
  }
}
@media (min-width: 1400px) {
  .coh-preview .main-menu .menu-level-2 > li > a {
    color: rgb(0, 0, 0);
    -webkit-transition: color 300ms ease-in-out, 300ms ease-in-out border-color;
    transition: color 300ms ease-in-out, 300ms ease-in-out border-color;
    border-bottom-width: 0.0625rem;
    border-bottom-style: solid;
    border-bottom-color: rgb(219, 219, 220);
  }
}
@media (min-width: 1400px) {
  .coh-preview .main-menu .menu-level-2 > li > a:hover {
    color: rgb(38, 163, 221);
    border-bottom-color: rgb(38, 163, 221);
  }
}
@media (min-width: 1400px) {
  .coh-preview .main-menu .menu-level-3 > li > a {
    -webkit-transition: color 300ms ease-in-out, 300ms ease-in-out border-color;
    transition: color 300ms ease-in-out, 300ms ease-in-out border-color;
    color: rgb(0, 0, 0);
    border-bottom-width: 0.0625rem;
    border-bottom-style: solid;
    border-bottom-color: rgb(219, 219, 220);
  }
}
@media (min-width: 1400px) {
  .coh-preview .main-menu .menu-level-3 > li > a:hover {
    color: rgb(38, 163, 221);
    border-bottom-color: rgb(38, 163, 221);
  }
}
@media (min-width: 768px) {
  .coh-preview .search-toggle-button {
    background-color: rgba(0, 0, 0, 0);
    color: rgb(0, 0, 0);
  }
}
@media (min-width: 1400px) {
  .coh-preview .search-toggle-button {
    -webkit-transition: color 300ms ease-in-out, background-color 300ms ease-in-out;
    transition: color 300ms ease-in-out, background-color 300ms ease-in-out;
    color: rgb(255, 255, 255);
    background-color: rgb(219, 219, 220);
  }
}
@media (min-width: 768px) {
  .coh-preview .search-toggle-button:hover {
    background-color: rgba(0, 0, 0, 0);
    color: rgb(38, 163, 221);
  }
}
@media (min-width: 1400px) {
  .coh-preview .search-toggle-button:hover {
    background-color: rgb(38, 163, 221);
  }
}
@media (min-width: 768px) {
  .coh-preview .search-toggle-button.search-active {
    background-color: rgba(0, 0, 0, 0);
  }
}
@media (min-width: 1400px) {
  .coh-preview .search-toggle-button.search-active {
    background-color: rgb(38, 163, 221);
  }
}
@media (min-width: 1400px) {
  .coh-preview .search-wrapper #block-searchform input[type=search] {
    background-color: rgb(242, 242, 242);
  }
}
@media (min-width: 1400px) {
  .coh-preview .search-wrapper #block-searchform input[type=submit] {
    color: rgba(0, 0, 0, 0);
  }
}
@media (min-width: 1400px) {
  .coh-preview .search-wrapper #block-searchform .form-actions {
    -webkit-transition: color 300ms ease-in-out, background-color 300ms ease-in-out;
    transition: color 300ms ease-in-out, background-color 300ms ease-in-out;
    color: rgb(0, 0, 0);
    background-color: rgb(242, 242, 242);
  }
}
@media (min-width: 1400px) {
  .coh-preview .search-wrapper #block-searchform .form-actions:hover {
    color: rgb(255, 255, 255);
    background-color: rgb(38, 163, 221);
  }
}
.coh-preview .header-wrapper {
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
  margin-top: auto;
  margin-right: auto;
  margin-bottom: auto;
  margin-left: auto;
}
@media (min-width: 768px) {
  .coh-preview .header-wrapper {
    max-width: 43.75rem;
  }
}
@media (min-width: 1024px) {
  .coh-preview .header-wrapper {
    max-width: 62.5rem;
  }
}
@media (min-width: 1170px) {
  .coh-preview .header-wrapper {
    max-width: 81.25rem;
  }
}
@media (min-width: 768px) {
  .coh-preview .header-wrapper .header-menu {
    margin-top: 0;
    margin-right: 30px;
    margin-bottom: 0;
    margin-left: 30px;
  }
}
@media (min-width: 1024px) {
  .coh-preview .header-wrapper .header-menu {
    margin-top: 0;
    margin-bottom: 0;
  }
}
@media (min-width: 1170px) {
  .coh-preview .header-wrapper .header-menu {
    margin-top: 0;
    margin-right: 100px;
    margin-bottom: 0;
    margin-left: 100px;
  }
}
.coh-preview .header-wrapper .header-menu ul {
  margin-bottom: 0;
}
.coh-preview .header-wrapper .header-menu ul li {
  margin-bottom: 0;
}
.coh-preview .header-wrapper .header-contact {
  font-family: 'Montserrat', sans-serif;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  font-weight: 700;
  color: rgb(0, 0, 0);
  font-size: 18px;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
}
.coh-preview .header-wrapper .header-contact:before {
  line-height: 1.0;
  font-weight: normal;
  text-transform: none;
  speak: none;
  font-variant: normal;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: \"\\f095\";
  font-family: icomoon;
  padding-right: 10px;
  font-size: 26px;
}
.coh-preview .header-wrapper .header-contact span:before {
  line-height: 1.0;
  font-weight: normal;
  text-transform: none;
  speak: none;
  font-variant: normal;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: \"\\f067\";
  font-family: icomoon;
  padding-right: 8px;
  font-size: 12px;
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__62c13b87a268fb01e5dcbda9efd46759";
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
        return new Source("", "__string_template__62c13b87a268fb01e5dcbda9efd46759", "");
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
