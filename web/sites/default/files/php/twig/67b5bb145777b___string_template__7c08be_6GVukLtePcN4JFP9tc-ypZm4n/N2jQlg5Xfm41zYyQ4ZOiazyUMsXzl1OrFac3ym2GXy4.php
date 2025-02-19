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

/* __string_template__7c08be61e2263a238eecd651a541a808 */
class __TwigTemplate_5af3445fa0b5337b4cf1a40226f07926 extends Template
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
        // line 2
        yield "@media (min-width: 768px) {
  .coh-style-header-light-theme {
    background-color: rgb(255, 255, 255);
  }
}
@media (min-width: 1024px) {
  .coh-style-header-light-theme .utilities-bar-horizontal {
    background-color: rgb(242, 242, 242);
  }
}
@media (min-width: 1024px) {
  .coh-style-header-light-theme .utilities-bar-horizontal .utilities-menu a {
    color: rgb(0, 0, 0);
  }
}
@media (min-width: 1024px) {
  .coh-style-header-light-theme .utilities-bar-horizontal .utilities-menu a:hover {
    color: rgb(38, 163, 221);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-light-theme .utilities-bar-horizontal .social-links a {
    color: rgb(38, 163, 221);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-light-theme .utilities-bar-horizontal .social-links a:hover {
    color: rgb(112, 195, 233);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-light-theme .utilities-bar-vertical {
    background-color: rgb(242, 242, 242);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-light-theme .utilities-bar-vertical .utilities-menu a {
    color: rgb(0, 0, 0);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-light-theme .utilities-bar-vertical .utilities-menu a:hover {
    color: rgb(38, 163, 221);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-light-theme .utilities-bar-vertical .social-links {
    background-color: rgb(255, 255, 255);
    border-bottom-width: 0.0625rem;
    border-bottom-style: solid;
    border-bottom-color: rgb(219, 219, 220);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-light-theme .utilities-bar-vertical .social-links a {
    color: rgb(38, 163, 221);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-light-theme .utilities-bar-vertical .social-links a:hover {
    color: rgb(112, 195, 233);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-light-theme .main-menu-toggle-button {
    color: rgb(0, 0, 0);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-light-theme .main-menu-toggle-button:hover {
    color: rgb(38, 163, 221);
  }
}
@media (min-width: 768px) {
  .coh-style-header-light-theme .main-menu-wrapper {
    background-color: rgb(255, 255, 255);
    -webkit-box-shadow: inset 0 0.0625rem 0 0 rgb(219, 219, 220);
            box-shadow: inset 0 0.0625rem 0 0 rgb(219, 219, 220);
  }
}
@media (min-width: 768px) {
  .coh-style-header-light-theme .main-menu .menu-level-1 > li {
    -webkit-box-shadow: none;
            box-shadow: none;
  }
}
@media (min-width: 1400px) {
  .coh-style-header-light-theme .main-menu .menu-level-1 > li {
    -webkit-transition: 300ms ease-in-out box-shadow;
    transition: 300ms ease-in-out box-shadow;
    -webkit-box-shadow: inset 0 0 0 0 rgba(0, 0, 0, 0);
            box-shadow: inset 0 0 0 0 rgba(0, 0, 0, 0);
  }
}
@media (min-width: 768px) {
  .coh-style-header-light-theme .main-menu .menu-level-1 > li:hover {
    -webkit-box-shadow: none;
            box-shadow: none;
  }
}
@media (min-width: 1400px) {
  .coh-style-header-light-theme .main-menu .menu-level-1 > li:hover {
    -webkit-box-shadow: inset 0 -0.1875rem 0 0 rgb(38, 163, 221);
            box-shadow: inset 0 -0.1875rem 0 0 rgb(38, 163, 221);
  }
}
@media (min-width: 768px) {
  .coh-style-header-light-theme .main-menu .menu-level-1 > li.is-expanded {
    -webkit-box-shadow: none;
            box-shadow: none;
  }
}
@media (min-width: 1400px) {
  .coh-style-header-light-theme .main-menu .menu-level-1 > li.is-expanded {
    -webkit-box-shadow: inset 0 -0.1875rem 0 0 rgb(38, 163, 221);
            box-shadow: inset 0 -0.1875rem 0 0 rgb(38, 163, 221);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-light-theme .main-menu .menu-level-1 > li.in-active-trail {
    -webkit-box-shadow: inset 0 -0.1875rem 0 0 rgb(38, 163, 221);
            box-shadow: inset 0 -0.1875rem 0 0 rgb(38, 163, 221);
  }
}
@media (min-width: 768px) {
  .coh-style-header-light-theme .main-menu .menu-level-1 > li > a {
    border-bottom-width: 0.0625rem;
    border-bottom-style: solid;
    border-bottom-color: rgb(219, 219, 220);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-light-theme .main-menu .menu-level-1 > li > a {
    color: rgb(0, 0, 0);
    -webkit-transition: color 300ms ease-in-out, 300ms ease-in-out border-color;
    transition: color 300ms ease-in-out, 300ms ease-in-out border-color;
  }
}
@media (min-width: 768px) {
  .coh-style-header-light-theme .main-menu .menu-level-1 > li > a:hover {
    border-bottom-color: rgb(38, 163, 221);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-light-theme .main-menu .menu-level-1 > li > a:hover {
    color: rgb(38, 163, 221);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-light-theme .main-menu .menu-level-1 > li > span {
    color: rgb(0, 0, 0);
  }
}
@media (min-width: 768px) {
  .coh-style-header-light-theme .main-menu .menu-level-2-wrapper > .coh-container-boxed {
    background-color: rgba(0, 0, 0, 0);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-light-theme .main-menu .menu-level-2-wrapper > .coh-container-boxed {
    background-color: rgb(242, 242, 242);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-light-theme .main-menu .menu-level-2 > li > a {
    color: rgb(0, 0, 0);
    -webkit-transition: color 300ms ease-in-out, 300ms ease-in-out border-color;
    transition: color 300ms ease-in-out, 300ms ease-in-out border-color;
    border-bottom-width: 0.0625rem;
    border-bottom-style: solid;
    border-bottom-color: rgb(219, 219, 220);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-light-theme .main-menu .menu-level-2 > li > a:hover {
    color: rgb(38, 163, 221);
    border-bottom-color: rgb(38, 163, 221);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-light-theme .main-menu .menu-level-3 > li > a {
    -webkit-transition: color 300ms ease-in-out, 300ms ease-in-out border-color;
    transition: color 300ms ease-in-out, 300ms ease-in-out border-color;
    color: rgb(0, 0, 0);
    border-bottom-width: 0.0625rem;
    border-bottom-style: solid;
    border-bottom-color: rgb(219, 219, 220);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-light-theme .main-menu .menu-level-3 > li > a:hover {
    color: rgb(38, 163, 221);
    border-bottom-color: rgb(38, 163, 221);
  }
}
@media (min-width: 768px) {
  .coh-style-header-light-theme .search-toggle-button {
    background-color: rgba(0, 0, 0, 0);
    color: rgb(0, 0, 0);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-light-theme .search-toggle-button {
    -webkit-transition: color 300ms ease-in-out, background-color 300ms ease-in-out;
    transition: color 300ms ease-in-out, background-color 300ms ease-in-out;
    color: rgb(255, 255, 255);
    background-color: rgb(219, 219, 220);
  }
}
@media (min-width: 768px) {
  .coh-style-header-light-theme .search-toggle-button:hover {
    background-color: rgba(0, 0, 0, 0);
    color: rgb(38, 163, 221);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-light-theme .search-toggle-button:hover {
    background-color: rgb(38, 163, 221);
  }
}
@media (min-width: 768px) {
  .coh-style-header-light-theme .search-toggle-button.search-active {
    background-color: rgba(0, 0, 0, 0);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-light-theme .search-toggle-button.search-active {
    background-color: rgb(38, 163, 221);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-light-theme .search-wrapper #block-searchform input[type=search] {
    background-color: rgb(242, 242, 242);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-light-theme .search-wrapper #block-searchform input[type=submit] {
    color: rgba(0, 0, 0, 0);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-light-theme .search-wrapper #block-searchform .form-actions {
    -webkit-transition: color 300ms ease-in-out, background-color 300ms ease-in-out;
    transition: color 300ms ease-in-out, background-color 300ms ease-in-out;
    color: rgb(0, 0, 0);
    background-color: rgb(242, 242, 242);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-light-theme .search-wrapper #block-searchform .form-actions:hover {
    color: rgb(255, 255, 255);
    background-color: rgb(38, 163, 221);
  }
}
.coh-style-header-light-theme .header-wrapper {
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
  .coh-style-header-light-theme .header-wrapper {
    max-width: 43.75rem;
  }
}
@media (min-width: 1024px) {
  .coh-style-header-light-theme .header-wrapper {
    max-width: 62.5rem;
  }
}
@media (min-width: 1170px) {
  .coh-style-header-light-theme .header-wrapper {
    max-width: 81.25rem;
  }
}
@media (min-width: 768px) {
  .coh-style-header-light-theme .header-wrapper .header-menu {
    margin-top: 0;
    margin-right: 10px;
    margin-bottom: 0;
    margin-left: 10px;
  }
}
@media (min-width: 1024px) {
  .coh-style-header-light-theme .header-wrapper .header-menu {
    margin-top: 0;
    margin-right: 14px;
    margin-bottom: 0;
    margin-left: 14px;
  }
}
@media (min-width: 1170px) {
  .coh-style-header-light-theme .header-wrapper .header-menu {
    margin-top: 0;
    margin-right: 100px;
    margin-bottom: 0;
    margin-left: 100px;
  }
}
.coh-style-header-light-theme .header-wrapper .header-menu ul {
  margin-bottom: 0;
}
.coh-style-header-light-theme .header-wrapper .header-menu ul li {
  margin-bottom: 0;
  font-size: 12px;
}
@media (min-width: 1024px) {
  .coh-style-header-light-theme .header-wrapper .header-menu ul li {
    font-size: 16px;
  }
}
.coh-style-header-light-theme .header-wrapper .header-contact {
  font-family: 'Montserrat', sans-serif;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  font-weight: 700;
  color: rgb(0, 0, 0);
  font-size: 16px;
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
@media (min-width: 1024px) {
  .coh-style-header-light-theme .header-wrapper .header-contact {
    font-size: 18px;
  }
}
.coh-style-header-light-theme .header-wrapper .header-contact:before {
  line-height: 1.0;
  font-weight: normal;
  text-transform: none;
  speak: none;
  font-variant: normal;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: \"\\f095\";
  font-family: icomoon;
  padding-right: 0.625rem;
  font-size: 1.375rem;
}
@media (min-width: 1024px) {
  .coh-style-header-light-theme .header-wrapper .header-contact:before {
    font-size: 1.625rem;
  }
}
.coh-style-header-light-theme .header-wrapper .header-contact span:before {
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
@media (min-width: 768px) {
  .coh-style-footer-light-theme {
    background-color: rgb(230, 240, 231);
  }
}
@media (min-width: 768px) {
  .coh-style-footer-light-theme .footer-menu a {
    color: rgb(119, 121, 117);
  }
}
@media (min-width: 1400px) {
  .coh-style-footer-light-theme .footer-menu a:hover {
    color: rgb(38, 163, 221);
  }
}
.coh-style-footer-light-theme .footer-menu ul li:first-child {
  padding-left: 0;
}
.coh-style-footer-light-theme .footer-menu ul li a:first-child {
  padding-left: 0;
}
.coh-style-footer-light-theme .social-links a {
  font-size: 24px;
  margin-right: 5px;
  margin-left: 5px;
}
@media (min-width: 768px) {
  .coh-style-footer-light-theme .social-links a {
    color: rgb(119, 121, 117);
  }
}
@media (min-width: 1400px) {
  .coh-style-footer-light-theme .social-links a:hover {
    color: rgb(112, 195, 233);
  }
}
.coh-style-footer-light-theme .secondary-row {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -webkit-flex-direction: row;
      -ms-flex-direction: row;
          flex-direction: row;
  -webkit-box-pack: justify;
  -webkit-justify-content: space-between;
      -ms-flex-pack: justify;
          justify-content: space-between;
  margin-top: auto;
  margin-right: auto;
  margin-bottom: auto;
  margin-left: auto;
}
@media (min-width: 768px) {
  .coh-style-footer-light-theme .secondary-row {
    max-width: 43.75rem;
    color: rgb(0, 0, 0);
    background-color: rgb(230, 240, 231);
  }
}
@media (min-width: 1024px) {
  .coh-style-footer-light-theme .secondary-row {
    max-width: 62.5rem;
  }
}
@media (min-width: 1170px) {
  .coh-style-footer-light-theme .secondary-row {
    max-width: 81.25rem;
  }
}
.coh-style-footer-light-theme .secondary-row .copyright-text p {
  font-family: 'Montserrat', sans-serif;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  font-weight: 800;
  color: rgb(0, 0, 0);
  font-size: 24px;
}
.coh-style-footer-light-theme .secondary-row .footer-contact {
  font-family: 'Montserrat', sans-serif;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  font-weight: 700;
  color: rgb(119, 121, 117);
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
.coh-style-footer-light-theme .secondary-row .footer-contact span:before {
  line-height: 1.0;
  font-weight: normal;
  text-transform: none;
  speak: none;
  font-variant: normal;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: \"\\f067\";
  font-family: icomoon;
  font-size: 12px;
  padding-right: 8px;
  color: rgb(119, 121, 117);
}
.coh-style-footer-light-theme .primary-row {
  margin-top: auto;
  margin-right: auto;
  margin-bottom: auto;
  margin-left: auto;
}
@media (min-width: 768px) {
  .coh-style-footer-light-theme .primary-row {
    max-width: 43.75rem;
  }
}
@media (min-width: 1024px) {
  .coh-style-footer-light-theme .primary-row {
    max-width: 62.5rem;
  }
}
@media (min-width: 1170px) {
  .coh-style-footer-light-theme .primary-row {
    max-width: 81.25rem;
  }
}
@media (min-width: 1024px) {
  .coh-style-social-icon {
    margin-bottom: 0;
    margin-left: 0;
    display: inline-block;
    list-style-type: none;
  }
}
@media (min-width: 1024px) {
  .coh-style-social-icon a {
    height: 2rem;
    width: 2rem;
    margin-right: 0.25rem;
    margin-left: 0.25rem;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
        -ms-flex-direction: row;
            flex-direction: row;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-border-radius: 1rem;
            border-radius: 1rem;
    -webkit-transition: background-color 300ms ease;
    transition: background-color 300ms ease;
    background-color: rgb(119, 121, 117);
  }
}
.coh-style-social-icon a:before {
  line-height: 1.0;
  font-weight: normal;
  text-transform: none;
  speak: none;
  font-variant: normal;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  font-size: 1rem;
  content: \"\\f09a\";
  font-family: icomoon;
}
@media (min-width: 1024px) {
  .coh-style-social-icon a:before {
    color: rgb(255, 255, 255);
  }
}
@media (min-width: 1400px) {
  .coh-style-social-icon a:before {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f09a\";
    font-family: icomoon;
    color: rgb(255, 255, 255);
  }
}
.coh-style-social-icon a:hover {
  color: rgb(255, 255, 255);
  background-color: rgb(119, 121, 117);
}
@media (min-width: 1400px) {
  .coh-style-slider-flex-layout .slick-track {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
  }
}
@media (min-width: 1400px) {
  .coh-style-map-info-window p {
    font-size: 0.75rem;
    margin-bottom: 0.375rem;
    line-height: 1.25;
  }
}
@media (min-width: 565px) {
  .coh-style-tag {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
    margin-right: 0.5rem;
  }
}
@media (min-width: 1400px) {
  .coh-style-tag {
    padding-right: 0.75rem;
    padding-left: 0.75rem;
    font-weight: bold;
    -webkit-border-radius: 0.75rem;
            border-radius: 0.75rem;
    -webkit-transition: color 300ms ease, background-color 300ms ease;
    transition: color 300ms ease, background-color 300ms ease;
    height: 1.5rem;
    display: -webkit-inline-box;
    display: -webkit-inline-flex;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
        -ms-flex-align: center;
            align-items: center;
    background-color: rgb(242, 242, 242);
    margin-right: 0.75rem;
    color: rgb(72, 72, 72);
  }
}
@media (min-width: 1400px) {
  .coh-style-tag:hover {
    background-color: rgb(38, 163, 221);
    color: rgb(255, 255, 255);
  }
}
@media (min-width: 1400px) {
  .coh-style-focusable-content input:focus, .coh-style-focusable-content select:focus, .coh-style-focusable-content textarea:focus, .coh-style-focusable-content button:focus, .coh-style-focusable-content a:focus {
    -webkit-box-shadow: 0 0 0 0.1875rem rgb(255, 204, 78);
            box-shadow: 0 0 0 0.1875rem rgb(255, 204, 78);
  }
}
@media (min-width: 1400px) {
  .coh-style-focusable-content .card-link:focus {
    -webkit-box-shadow: none;
            box-shadow: none;
  }
}
@media (min-width: 1400px) {
  .coh-style-focusable-content .card-link:focus:after {
    -webkit-box-shadow: 0 0 0 0.1875rem rgb(255, 204, 78);
            box-shadow: 0 0 0 0.1875rem rgb(255, 204, 78);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-dark-theme {
    background-color: rgb(34, 34, 34);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-dark-theme .utilities-bar-horizontal {
    background-color: rgb(50, 50, 50);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-dark-theme .utilities-bar-horizontal .utilities-menu a {
    color: rgb(255, 255, 255);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-dark-theme .utilities-bar-horizontal .utilities-menu a:hover {
    color: rgb(38, 163, 221);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-dark-theme .utilities-bar-horizontal .social-links a {
    color: rgb(38, 163, 221);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-dark-theme .utilities-bar-horizontal .social-links a:hover {
    color: rgb(112, 195, 233);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-dark-theme .utilities-bar-vertical {
    background-color: rgb(242, 242, 242);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-dark-theme .utilities-bar-vertical .utilities-menu a {
    color: rgb(0, 0, 0);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-dark-theme .utilities-bar-vertical .utilities-menu a:hover {
    color: rgb(38, 163, 221);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-dark-theme .utilities-bar-vertical .social-links {
    background-color: rgb(255, 255, 255);
    border-bottom-width: 0.0625rem;
    border-bottom-style: solid;
    border-bottom-color: rgb(219, 219, 220);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-dark-theme .utilities-bar-vertical .social-links a {
    color: rgb(38, 163, 221);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-dark-theme .utilities-bar-vertical .social-links a:hover {
    color: rgb(112, 195, 233);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-dark-theme .main-menu-toggle-button {
    color: rgb(255, 255, 255);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-dark-theme .main-menu-toggle-button:hover {
    color: rgb(38, 163, 221);
  }
}
@media (min-width: 768px) {
  .coh-style-header-dark-theme .main-menu-wrapper {
    background-color: rgb(255, 255, 255);
  }
}
@media (min-width: 768px) {
  .coh-style-header-dark-theme .main-menu .menu-level-1 > li {
    -webkit-box-shadow: none;
            box-shadow: none;
  }
}
@media (min-width: 1400px) {
  .coh-style-header-dark-theme .main-menu .menu-level-1 > li {
    -webkit-transition: 300ms ease-in-out box-shadow;
    transition: 300ms ease-in-out box-shadow;
    -webkit-box-shadow: inset 0 0 0 0 rgba(0, 0, 0, 0);
            box-shadow: inset 0 0 0 0 rgba(0, 0, 0, 0);
  }
}
@media (min-width: 768px) {
  .coh-style-header-dark-theme .main-menu .menu-level-1 > li:hover {
    -webkit-box-shadow: none;
            box-shadow: none;
  }
}
@media (min-width: 1400px) {
  .coh-style-header-dark-theme .main-menu .menu-level-1 > li:hover {
    -webkit-box-shadow: inset 0 -0.1875rem 0 0 rgb(38, 163, 221);
            box-shadow: inset 0 -0.1875rem 0 0 rgb(38, 163, 221);
  }
}
@media (min-width: 768px) {
  .coh-style-header-dark-theme .main-menu .menu-level-1 > li.is-expanded {
    -webkit-box-shadow: none;
            box-shadow: none;
  }
}
@media (min-width: 1400px) {
  .coh-style-header-dark-theme .main-menu .menu-level-1 > li.is-expanded {
    -webkit-box-shadow: inset 0 -0.1875rem 0 0 rgb(38, 163, 221);
            box-shadow: inset 0 -0.1875rem 0 0 rgb(38, 163, 221);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-dark-theme .main-menu .menu-level-1 > li.in-active-trail {
    -webkit-box-shadow: inset 0 -0.1875rem 0 0 rgb(38, 163, 221);
            box-shadow: inset 0 -0.1875rem 0 0 rgb(38, 163, 221);
  }
}
@media (min-width: 768px) {
  .coh-style-header-dark-theme .main-menu .menu-level-1 > li > a {
    border-bottom-width: 0.0625rem;
    border-bottom-style: solid;
    border-bottom-color: rgb(219, 219, 220);
    color: rgb(0, 0, 0);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-dark-theme .main-menu .menu-level-1 > li > a {
    color: rgb(255, 255, 255);
    -webkit-transition: color 300ms ease-in-out, 300ms ease-in-out border-color;
    transition: color 300ms ease-in-out, 300ms ease-in-out border-color;
  }
}
@media (min-width: 768px) {
  .coh-style-header-dark-theme .main-menu .menu-level-1 > li > a:hover {
    border-bottom-color: rgb(38, 163, 221);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-dark-theme .main-menu .menu-level-1 > li > a:hover {
    color: rgb(38, 163, 221);
  }
}
@media (min-width: 768px) {
  .coh-style-header-dark-theme .main-menu .menu-level-1 > li > span {
    color: rgb(0, 0, 0);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-dark-theme .main-menu .menu-level-1 > li > span {
    color: rgb(255, 255, 255);
  }
}
@media (min-width: 768px) {
  .coh-style-header-dark-theme .main-menu .menu-level-2-wrapper > .coh-container-boxed {
    background-color: rgba(0, 0, 0, 0);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-dark-theme .main-menu .menu-level-2-wrapper > .coh-container-boxed {
    background-color: rgb(242, 242, 242);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-dark-theme .main-menu .menu-level-2 > li > a {
    color: rgb(0, 0, 0);
    -webkit-transition: color 300ms ease-in-out, 300ms ease-in-out border-color;
    transition: color 300ms ease-in-out, 300ms ease-in-out border-color;
    border-bottom-width: 0.0625rem;
    border-bottom-style: solid;
    border-bottom-color: rgb(219, 219, 220);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-dark-theme .main-menu .menu-level-2 > li > a:hover {
    color: rgb(38, 163, 221);
    border-bottom-color: rgb(38, 163, 221);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-dark-theme .main-menu .menu-level-3 > li > a {
    -webkit-transition: color 300ms ease-in-out, 300ms ease-in-out border-color;
    transition: color 300ms ease-in-out, 300ms ease-in-out border-color;
    color: rgb(0, 0, 0);
    border-bottom-width: 0.0625rem;
    border-bottom-style: solid;
    border-bottom-color: rgb(219, 219, 220);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-dark-theme .main-menu .menu-level-3 > li > a:hover {
    color: rgb(38, 163, 221);
    border-bottom-color: rgb(38, 163, 221);
  }
}
@media (min-width: 768px) {
  .coh-style-header-dark-theme .search-toggle-button {
    background-color: rgba(0, 0, 0, 0);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-dark-theme .search-toggle-button {
    -webkit-transition: color 300ms ease-in-out, background-color 300ms ease-in-out;
    transition: color 300ms ease-in-out, background-color 300ms ease-in-out;
    color: rgb(255, 255, 255);
    background-color: rgb(50, 50, 50);
  }
}
@media (min-width: 768px) {
  .coh-style-header-dark-theme .search-toggle-button:hover {
    background-color: rgba(0, 0, 0, 0);
    color: rgb(38, 163, 221);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-dark-theme .search-toggle-button:hover {
    background-color: rgb(38, 163, 221);
  }
}
@media (min-width: 768px) {
  .coh-style-header-dark-theme .search-toggle-button.search-active {
    background-color: rgba(0, 0, 0, 0);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-dark-theme .search-toggle-button.search-active {
    background-color: rgb(38, 163, 221);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-dark-theme .search-wrapper #block-searchform input[type=search] {
    background-color: rgb(242, 242, 242);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-dark-theme .search-wrapper #block-searchform input[type=submit] {
    color: rgba(0, 0, 0, 0);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-dark-theme .search-wrapper #block-searchform .form-actions {
    -webkit-transition: color 300ms ease-in-out, background-color 300ms ease-in-out;
    transition: color 300ms ease-in-out, background-color 300ms ease-in-out;
    color: rgb(0, 0, 0);
    background-color: rgb(242, 242, 242);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-dark-theme .search-wrapper #block-searchform .form-actions:hover {
    color: rgb(255, 255, 255);
    background-color: rgb(38, 163, 221);
  }
}
@media (min-width: 1400px) {
  .coh-style-contact-information {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
        -ms-flex-direction: column;
            flex-direction: column;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    margin-bottom: 0;
  }
}
@media (min-width: 1400px) {
  .coh-style-contact-information li {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    margin-bottom: 0.5rem;
    margin-left: 0;
    list-style-type: none;
    -webkit-box-align: start;
    -webkit-align-items: flex-start;
        -ms-flex-align: start;
            align-items: flex-start;
  }
}
@media (min-width: 1400px) {
  .coh-style-contact-information li:before {
    width: 1rem;
    margin-right: 1rem;
  }
}
@media (min-width: 1400px) {
  .coh-style-contact-information li.place-contact-name:before {
    line-height: 1.5;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f007\";
    font-family: icomoon;
  }
}
@media (min-width: 1400px) {
  .coh-style-contact-information li.place-company:before {
    line-height: 1.5;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f1ad\";
    font-family: icomoon;
  }
}
@media (min-width: 1400px) {
  .coh-style-contact-information li.place-address:before {
    line-height: 1.5;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f041\";
    font-family: icomoon;
  }
}
@media (min-width: 1400px) {
  .coh-style-contact-information li.place-telephone:before {
    line-height: 1.5;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f098\";
    font-family: icomoon;
  }
}
@media (min-width: 1400px) {
  .coh-style-contact-information li.place-email:before {
    line-height: 1.5;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f0e0\";
    font-family: icomoon;
  }
}
@media (min-width: 1400px) {
  .coh-style-header-colored-theme {
    background-color: rgb(26, 137, 201);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-colored-theme .utilities-bar-horizontal {
    background-color: rgb(38, 163, 221);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-colored-theme .utilities-bar-horizontal .utilities-menu a {
    color: rgb(255, 255, 255);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-colored-theme .utilities-bar-horizontal .utilities-menu a:hover {
    color: rgb(0, 0, 0);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-colored-theme .utilities-bar-horizontal .social-links a {
    color: rgb(0, 0, 0);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-colored-theme .utilities-bar-horizontal .social-links a:hover {
    color: rgb(255, 255, 255);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-colored-theme .utilities-bar-vertical {
    background-color: rgb(242, 242, 242);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-colored-theme .utilities-bar-vertical .utilities-menu a {
    color: rgb(0, 0, 0);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-colored-theme .utilities-bar-vertical .utilities-menu a:hover {
    color: rgb(38, 163, 221);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-colored-theme .utilities-bar-vertical .social-links {
    background-color: rgb(255, 255, 255);
    border-bottom-width: 0.0625rem;
    border-bottom-style: solid;
    border-bottom-color: rgb(219, 219, 220);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-colored-theme .utilities-bar-vertical .social-links a {
    color: rgb(38, 163, 221);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-colored-theme .utilities-bar-vertical .social-links a:hover {
    color: rgb(112, 195, 233);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-colored-theme .main-menu-toggle-button {
    color: rgb(255, 255, 255);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-colored-theme .main-menu-toggle-button:hover {
    color: rgb(0, 0, 0);
  }
}
@media (min-width: 768px) {
  .coh-style-header-colored-theme .main-menu-wrapper {
    background-color: rgb(255, 255, 255);
  }
}
@media (min-width: 768px) {
  .coh-style-header-colored-theme .main-menu .menu-level-1 > li {
    -webkit-box-shadow: none;
            box-shadow: none;
  }
}
@media (min-width: 1400px) {
  .coh-style-header-colored-theme .main-menu .menu-level-1 > li {
    -webkit-transition: 300ms ease-in-out box-shadow;
    transition: 300ms ease-in-out box-shadow;
    -webkit-box-shadow: inset 0 0 0 0 rgba(0, 0, 0, 0);
            box-shadow: inset 0 0 0 0 rgba(0, 0, 0, 0);
  }
}
@media (min-width: 768px) {
  .coh-style-header-colored-theme .main-menu .menu-level-1 > li:hover {
    -webkit-box-shadow: none;
            box-shadow: none;
  }
}
@media (min-width: 1400px) {
  .coh-style-header-colored-theme .main-menu .menu-level-1 > li:hover {
    -webkit-box-shadow: inset 0 -0.1875rem 0 0 rgb(0, 0, 0);
            box-shadow: inset 0 -0.1875rem 0 0 rgb(0, 0, 0);
  }
}
@media (min-width: 768px) {
  .coh-style-header-colored-theme .main-menu .menu-level-1 > li.is-expanded {
    -webkit-box-shadow: none;
            box-shadow: none;
  }
}
@media (min-width: 1400px) {
  .coh-style-header-colored-theme .main-menu .menu-level-1 > li.is-expanded {
    -webkit-box-shadow: inset 0 -0.1875rem 0 0 rgb(0, 0, 0);
            box-shadow: inset 0 -0.1875rem 0 0 rgb(0, 0, 0);
  }
}
@media (min-width: 768px) {
  .coh-style-header-colored-theme .main-menu .menu-level-1 > li.in-active-trail {
    -webkit-box-shadow: inset 0 -0.1875rem 0 0 rgb(38, 163, 221);
            box-shadow: inset 0 -0.1875rem 0 0 rgb(38, 163, 221);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-colored-theme .main-menu .menu-level-1 > li.in-active-trail {
    -webkit-box-shadow: inset 0 -0.1875rem 0 0 rgb(0, 0, 0);
            box-shadow: inset 0 -0.1875rem 0 0 rgb(0, 0, 0);
  }
}
@media (min-width: 768px) {
  .coh-style-header-colored-theme .main-menu .menu-level-1 > li > a {
    border-bottom-width: 0.0625rem;
    border-bottom-style: solid;
    border-bottom-color: rgb(219, 219, 220);
    color: rgb(0, 0, 0);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-colored-theme .main-menu .menu-level-1 > li > a {
    color: rgb(255, 255, 255);
    -webkit-transition: color 300ms ease-in-out, 300ms ease-in-out border-color;
    transition: color 300ms ease-in-out, 300ms ease-in-out border-color;
  }
}
@media (min-width: 768px) {
  .coh-style-header-colored-theme .main-menu .menu-level-1 > li > a:hover {
    color: rgb(38, 163, 221);
    border-bottom-color: rgb(38, 163, 221);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-colored-theme .main-menu .menu-level-1 > li > a:hover {
    color: rgb(0, 0, 0);
  }
}
@media (min-width: 768px) {
  .coh-style-header-colored-theme .main-menu .menu-level-1 > li > span {
    color: rgb(0, 0, 0);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-colored-theme .main-menu .menu-level-1 > li > span {
    color: rgb(255, 255, 255);
  }
}
@media (min-width: 768px) {
  .coh-style-header-colored-theme .main-menu .menu-level-2-wrapper > .coh-container-boxed {
    background-color: rgba(0, 0, 0, 0);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-colored-theme .main-menu .menu-level-2-wrapper > .coh-container-boxed {
    background-color: rgb(242, 242, 242);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-colored-theme .main-menu .menu-level-2 > li > a {
    color: rgb(0, 0, 0);
    -webkit-transition: color 300ms ease-in-out, 300ms ease-in-out border-color;
    transition: color 300ms ease-in-out, 300ms ease-in-out border-color;
    border-bottom-width: 0.0625rem;
    border-bottom-style: solid;
    border-bottom-color: rgb(219, 219, 220);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-colored-theme .main-menu .menu-level-2 > li > a:hover {
    color: rgb(38, 163, 221);
    border-bottom-color: rgb(38, 163, 221);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-colored-theme .main-menu .menu-level-3 > li > a {
    -webkit-transition: color 300ms ease-in-out, 300ms ease-in-out border-color;
    transition: color 300ms ease-in-out, 300ms ease-in-out border-color;
    color: rgb(0, 0, 0);
    border-bottom-width: 0.0625rem;
    border-bottom-style: solid;
    border-bottom-color: rgb(219, 219, 220);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-colored-theme .main-menu .menu-level-3 > li > a:hover {
    color: rgb(38, 163, 221);
    border-bottom-color: rgb(38, 163, 221);
  }
}
@media (min-width: 768px) {
  .coh-style-header-colored-theme .search-toggle-button {
    background-color: rgba(0, 0, 0, 0);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-colored-theme .search-toggle-button {
    -webkit-transition: color 300ms ease-in-out, background-color 300ms ease-in-out;
    transition: color 300ms ease-in-out, background-color 300ms ease-in-out;
    color: rgb(255, 255, 255);
    background-color: rgb(38, 163, 221);
  }
}
@media (min-width: 768px) {
  .coh-style-header-colored-theme .search-toggle-button:hover {
    background-color: rgba(0, 0, 0, 0);
    color: rgb(0, 0, 0);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-colored-theme .search-toggle-button:hover {
    background-color: rgb(0, 0, 0);
  }
}
@media (min-width: 768px) {
  .coh-style-header-colored-theme .search-toggle-button.search-active {
    background-color: rgba(0, 0, 0, 0);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-colored-theme .search-toggle-button.search-active {
    background-color: rgb(0, 0, 0);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-colored-theme .search-wrapper #block-searchform input[type=search] {
    background-color: rgb(242, 242, 242);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-colored-theme .search-wrapper #block-searchform input[type=submit] {
    color: rgba(0, 0, 0, 0);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-colored-theme .search-wrapper #block-searchform .form-actions {
    -webkit-transition: color 300ms ease-in-out, background-color 300ms ease-in-out;
    transition: color 300ms ease-in-out, background-color 300ms ease-in-out;
    color: rgb(0, 0, 0);
    background-color: rgb(242, 242, 242);
  }
}
@media (min-width: 1400px) {
  .coh-style-header-colored-theme .search-wrapper #block-searchform .form-actions:hover {
    color: rgb(255, 255, 255);
    background-color: rgb(0, 0, 0);
  }
}
@media (min-width: 1400px) {
  .coh-style-footer-colored-theme {
    background-color: rgb(38, 163, 221);
  }
}
@media (min-width: 1400px) {
  .coh-style-footer-colored-theme .footer-menu a {
    color: rgb(255, 255, 255);
  }
}
@media (min-width: 1400px) {
  .coh-style-footer-colored-theme .footer-menu a:hover {
    color: rgb(0, 0, 0);
  }
}
@media (min-width: 1400px) {
  .coh-style-footer-colored-theme .social-links a {
    color: rgb(0, 0, 0);
  }
}
@media (min-width: 1400px) {
  .coh-style-footer-colored-theme .social-links a:hover {
    color: rgb(255, 255, 255);
  }
}
@media (min-width: 1400px) {
  .coh-style-footer-colored-theme .secondary-row {
    background-color: rgb(26, 137, 201);
    color: rgb(255, 255, 255);
  }
}
@media (min-width: 1400px) {
  .coh-style-footer-dark-theme {
    background-color: rgb(34, 34, 34);
  }
}
@media (min-width: 1400px) {
  .coh-style-footer-dark-theme .footer-menu a {
    color: rgb(255, 255, 255);
  }
}
@media (min-width: 1400px) {
  .coh-style-footer-dark-theme .footer-menu a:hover {
    color: rgb(38, 163, 221);
  }
}
@media (min-width: 1400px) {
  .coh-style-footer-dark-theme .social-links a {
    color: rgb(38, 163, 221);
  }
}
@media (min-width: 1400px) {
  .coh-style-footer-dark-theme .social-links a:hover {
    color: rgb(112, 195, 233);
  }
}
@media (min-width: 1400px) {
  .coh-style-footer-dark-theme .secondary-row {
    background-color: rgb(50, 50, 50);
    color: rgb(255, 255, 255);
  }
}
@media (min-width: 1400px) {
  .coh-style-search-block {
    margin-bottom: 1rem;
  }
}
@media (min-width: 1400px) {
  .coh-style-search-block .search-block-form {
    padding: 0;
  }
}
@media (min-width: 1400px) {
  .coh-style-search-block form {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
  }
}
@media (min-width: 1400px) {
  .coh-style-search-block #search-block-form .form-type-search {
    margin-right: 0;
  }
}
@media (min-width: 1400px) {
  .coh-style-search-block .form-type-search, .coh-style-search-block .form-type-search-api-autocomplete {
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
    padding: 0;
  }
}
@media (min-width: 1400px) {
  .coh-style-search-block .form-search, .coh-style-search-block .form-text.form-autocomplete {
    height: 3.5rem;
    width: 100%;
    background-color: rgb(242, 242, 242);
    padding-right: 1.5rem;
    padding-left: 1.5rem;
    border-style: none;
    color: rgb(72, 72, 72);
    -webkit-box-sizing: border-box;
            box-sizing: border-box;
  }
}
@media (min-width: 1400px) {
  .coh-style-search-block .form-actions {
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
    background-color: rgb(242, 242, 242);
    -webkit-transition: background-color 300ms ease;
    transition: background-color 300ms ease;
    padding: 0;
  }
}
@media (min-width: 1400px) {
  .coh-style-search-block .form-actions:before {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    pointer-events: none;
    content: \"\\f002\";
    font-family: icomoon;
    position: absolute;
    font-size: 1.5rem;
    color: rgb(0, 0, 0);
    -webkit-transition: color 300ms ease;
    transition: color 300ms ease;
  }
}
@media (min-width: 1400px) {
  .coh-style-search-block .form-actions:hover {
    background-color: rgb(38, 163, 221);
  }
}
@media (min-width: 1400px) {
  .coh-style-search-block .form-actions:hover:before {
    color: rgb(255, 255, 255);
  }
}
@media (min-width: 1400px) {
  .coh-style-search-block .button.form-submit {
    height: 3.5rem;
    width: 3.5rem;
    padding: 0;
    background-color: rgba(0, 0, 0, 0);
    border-style: none;
    color: rgba(0, 0, 0, 0);
  }
}
@media (min-width: 1400px) {
  .coh-style-search-block .button.form-submit:hover {
    background-color: rgba(0, 0, 0, 0);
    color: rgba(0, 0, 0, 0);
  }
}
@media (min-width: 1400px) {
  .coh-style-text-color-light-background {
    color: rgb(0, 0, 0);
  }
}
@media (min-width: 1400px) {
  .coh-style-text-color-colored-background {
    color: rgb(255, 255, 255);
  }
}
@media (min-width: 1400px) {
  .coh-style-text-color-dark-background {
    color: rgb(255, 255, 255);
  }
}
@media (min-width: 1400px) {
  .coh-style-fake-link-with-icon {
    color: rgb(38, 163, 221);
    display: -webkit-inline-box;
    display: -webkit-inline-flex;
    display: -ms-inline-flexbox;
    display: inline-flex;
    font-size: 0.875rem;
    line-height: 1.25;
    font-weight: bold;
    -webkit-box-align: center;
    -webkit-align-items: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-transition: color 300ms ease;
    transition: color 300ms ease;
  }
}
@media (min-width: 1400px) {
  .coh-style-fake-link-with-icon:after {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f054\";
    font-family: icomoon;
    padding-left: 0.375rem;
    font-size: 0.625rem;
  }
}
@media (min-width: 1400px) {
  .coh-style-fake-button {
    background-color: rgb(38, 163, 221);
    color: rgb(255, 255, 255);
    display: -webkit-inline-box;
    display: -webkit-inline-flex;
    display: -ms-inline-flexbox;
    display: inline-flex;
    padding-top: 1rem;
    padding-right: 1rem;
    padding-bottom: 1rem;
    padding-left: 1rem;
    -webkit-transition: background-color 300ms ease;
    transition: background-color 300ms ease;
    font-size: 0.875rem;
    line-height: 1rem;
    font-weight: bold;
    margin-top: 0.5rem;
    margin-bottom: 0.5rem;
    -webkit-box-align: center;
    -webkit-align-items: center;
        -ms-flex-align: center;
            align-items: center;
  }
}
@media (min-width: 1400px) {
  .coh-style-fake-button:hover {
    background-color: rgb(112, 195, 233);
    color: rgb(255, 255, 255);
  }
}
@media (min-width: 1400px) {
  .coh-style-fake-button:after {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f054\";
    font-family: icomoon;
    font-size: 0.75rem;
    padding-left: 0.5rem;
  }
}
@media (min-width: 1400px) {
  .coh-style-accordion-tabs-keyline-light-text .coh-accordion-title.is-active a {
    background-color: rgba(0, 0, 0, 0);
    -webkit-box-shadow: inset 0 -0.125rem 0 0 rgb(38, 163, 221);
            box-shadow: inset 0 -0.125rem 0 0 rgb(38, 163, 221);
  }
}
@media (min-width: 1400px) {
  .coh-style-accordion-tabs-keyline-light-text .coh-accordion-title.is-active a:after {
    -webkit-transform: rotateZ(180deg);
        -ms-transform: rotate(180deg);
            transform: rotateZ(180deg);
  }
}
@media (min-width: 565px) {
  .coh-style-accordion-tabs-keyline-light-text .coh-accordion-title a {
    padding-top: 1rem;
    padding-right: 1.5rem;
    padding-bottom: 1rem;
    padding-left: 1.5rem;
  }
}
@media (min-width: 1024px) {
  .coh-style-accordion-tabs-keyline-light-text .coh-accordion-title a {
    padding-right: 1.5rem;
    padding-left: 1.5rem;
  }
}
@media (min-width: 1400px) {
  .coh-style-accordion-tabs-keyline-light-text .coh-accordion-title a {
    background-color: rgba(0, 0, 0, 0);
    color: rgb(255, 255, 255);
    -webkit-box-shadow: inset 0 -0.0625rem 0 0 rgb(219, 219, 220);
            box-shadow: inset 0 -0.0625rem 0 0 rgb(219, 219, 220);
    -webkit-transition: 200ms ease box-shadow, background-color 300ms ease;
    transition: 200ms ease box-shadow, background-color 300ms ease;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    font-size: 0.875rem;
    line-height: 1rem;
    padding-top: 1.25rem;
    padding-right: 2rem;
    padding-bottom: 1.25rem;
    padding-left: 2rem;
    font-weight: bold;
    -webkit-box-align: center;
    -webkit-align-items: center;
        -ms-flex-align: center;
            align-items: center;
  }
}
@media (min-width: 1400px) {
  .coh-style-accordion-tabs-keyline-light-text .coh-accordion-title a:hover {
    background-color: rgba(0, 0, 0, 0);
    color: rgb(255, 255, 255);
    -webkit-box-shadow: inset 0 -0.125rem 0 0 rgb(38, 163, 221);
            box-shadow: inset 0 -0.125rem 0 0 rgb(38, 163, 221);
  }
}
@media (min-width: 1400px) {
  .coh-style-accordion-tabs-keyline-light-text .coh-accordion-title a:after {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    margin-left: auto;
    content: \"\\f078\";
    font-family: icomoon;
    -webkit-transform: rotateZ(0deg);
        -ms-transform: rotate(0deg);
            transform: rotateZ(0deg);
    -webkit-transition: 300ms ease transform;
    transition: 300ms ease transform;
  }
}
@media (min-width: 1400px) {
  .coh-style-accordion-tabs-keyline-light-text .coh-accordion-tabs-nav {
    -webkit-box-shadow: inset 0 -0.0625rem 0 0 rgb(219, 219, 220);
            box-shadow: inset 0 -0.0625rem 0 0 rgb(219, 219, 220);
  }
}
@media (min-width: 1400px) {
  .coh-style-accordion-tabs-keyline-light-text .coh-accordion-tabs-nav li {
    margin-bottom: 0;
    margin-left: 0;
  }
}
@media (min-width: 1400px) {
  .coh-style-accordion-tabs-keyline-light-text .coh-accordion-tabs-nav li.is-active a {
    -webkit-box-shadow: inset 0 -0.125rem 0 0 rgb(38, 163, 221);
            box-shadow: inset 0 -0.125rem 0 0 rgb(38, 163, 221);
    background-color: rgba(0, 0, 0, 0);
  }
}
@media (min-width: 565px) {
  .coh-style-accordion-tabs-keyline-light-text .coh-accordion-tabs-nav li a {
    padding-top: 1rem;
    padding-bottom: 1rem;
  }
}
@media (min-width: 1024px) {
  .coh-style-accordion-tabs-keyline-light-text .coh-accordion-tabs-nav li a {
    padding-right: 1.5rem;
    padding-left: 1.5rem;
  }
}
@media (min-width: 1400px) {
  .coh-style-accordion-tabs-keyline-light-text .coh-accordion-tabs-nav li a {
    -webkit-box-shadow: inset 0 -0.0625rem 0 0 rgb(219, 219, 220);
            box-shadow: inset 0 -0.0625rem 0 0 rgb(219, 219, 220);
    -webkit-transition: 200ms ease box-shadow;
    transition: 200ms ease box-shadow;
    color: rgb(255, 255, 255);
    background-color: rgba(0, 0, 0, 0);
    font-weight: bold;
    font-size: 0.875rem;
    line-height: 1rem;
    padding-top: 1.25rem;
    padding-right: 2rem;
    padding-bottom: 1.25rem;
    padding-left: 2rem;
  }
}
@media (min-width: 1400px) {
  .coh-style-accordion-tabs-keyline-light-text .coh-accordion-tabs-nav li a:hover {
    -webkit-box-shadow: inset 0 -0.125rem 0 0 rgb(38, 163, 221);
            box-shadow: inset 0 -0.125rem 0 0 rgb(38, 163, 221);
    color: rgb(255, 255, 255);
    background-color: rgba(0, 0, 0, 0);
  }
}
@media (min-width: 1400px) {
  .coh-style-accordion-tabs-keyline-dark-text .coh-accordion-title.is-active a {
    background-color: rgba(0, 0, 0, 0);
    -webkit-box-shadow: inset 0 -0.125rem 0 0 rgb(38, 163, 221);
            box-shadow: inset 0 -0.125rem 0 0 rgb(38, 163, 221);
  }
}
@media (min-width: 1400px) {
  .coh-style-accordion-tabs-keyline-dark-text .coh-accordion-title.is-active a:after {
    -webkit-transform: rotateZ(180deg);
        -ms-transform: rotate(180deg);
            transform: rotateZ(180deg);
  }
}
@media (min-width: 565px) {
  .coh-style-accordion-tabs-keyline-dark-text .coh-accordion-title a {
    padding-top: 1rem;
    padding-right: 1.5rem;
    padding-bottom: 1rem;
    padding-left: 1.5rem;
  }
}
@media (min-width: 1024px) {
  .coh-style-accordion-tabs-keyline-dark-text .coh-accordion-title a {
    padding-right: 1.5rem;
    padding-left: 1.5rem;
  }
}
@media (min-width: 1400px) {
  .coh-style-accordion-tabs-keyline-dark-text .coh-accordion-title a {
    background-color: rgba(0, 0, 0, 0);
    color: rgb(0, 0, 0);
    -webkit-box-shadow: inset 0 -0.0625rem 0 0 rgb(219, 219, 220);
            box-shadow: inset 0 -0.0625rem 0 0 rgb(219, 219, 220);
    -webkit-transition: 200ms ease box-shadow, background-color 300ms ease;
    transition: 200ms ease box-shadow, background-color 300ms ease;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    font-size: 0.875rem;
    line-height: 1rem;
    padding-top: 1.25rem;
    padding-right: 2rem;
    padding-bottom: 1.25rem;
    padding-left: 2rem;
    font-weight: bold;
    -webkit-box-align: center;
    -webkit-align-items: center;
        -ms-flex-align: center;
            align-items: center;
  }
}
@media (min-width: 1400px) {
  .coh-style-accordion-tabs-keyline-dark-text .coh-accordion-title a:hover {
    background-color: rgba(0, 0, 0, 0);
    color: rgb(0, 0, 0);
    -webkit-box-shadow: inset 0 -0.125rem 0 0 rgb(38, 163, 221);
            box-shadow: inset 0 -0.125rem 0 0 rgb(38, 163, 221);
  }
}
@media (min-width: 1400px) {
  .coh-style-accordion-tabs-keyline-dark-text .coh-accordion-title a:after {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    margin-left: auto;
    content: \"\\f078\";
    font-family: icomoon;
    -webkit-transform: rotateZ(0deg);
        -ms-transform: rotate(0deg);
            transform: rotateZ(0deg);
    -webkit-transition: 300ms ease transform;
    transition: 300ms ease transform;
  }
}
@media (min-width: 1400px) {
  .coh-style-accordion-tabs-keyline-dark-text .coh-accordion-tabs-nav {
    -webkit-box-shadow: inset 0 -0.0625rem 0 0 rgb(219, 219, 220);
            box-shadow: inset 0 -0.0625rem 0 0 rgb(219, 219, 220);
  }
}
@media (min-width: 1400px) {
  .coh-style-accordion-tabs-keyline-dark-text .coh-accordion-tabs-nav li {
    margin-bottom: 0;
    margin-left: 0;
  }
}
@media (min-width: 1400px) {
  .coh-style-accordion-tabs-keyline-dark-text .coh-accordion-tabs-nav li.is-active a {
    -webkit-box-shadow: inset 0 -0.125rem 0 0 rgb(38, 163, 221);
            box-shadow: inset 0 -0.125rem 0 0 rgb(38, 163, 221);
    background-color: rgba(0, 0, 0, 0);
  }
}
@media (min-width: 565px) {
  .coh-style-accordion-tabs-keyline-dark-text .coh-accordion-tabs-nav li a {
    padding-top: 1rem;
    padding-bottom: 1rem;
  }
}
@media (min-width: 1024px) {
  .coh-style-accordion-tabs-keyline-dark-text .coh-accordion-tabs-nav li a {
    padding-right: 1.5rem;
    padding-left: 1.5rem;
  }
}
@media (min-width: 1400px) {
  .coh-style-accordion-tabs-keyline-dark-text .coh-accordion-tabs-nav li a {
    -webkit-box-shadow: inset 0 -0.0625rem 0 0 rgb(219, 219, 220);
            box-shadow: inset 0 -0.0625rem 0 0 rgb(219, 219, 220);
    -webkit-transition: 200ms ease box-shadow;
    transition: 200ms ease box-shadow;
    color: rgb(0, 0, 0);
    background-color: rgba(0, 0, 0, 0);
    font-weight: bold;
    font-size: 0.875rem;
    line-height: 1rem;
    padding-top: 1.25rem;
    padding-right: 2rem;
    padding-bottom: 1.25rem;
    padding-left: 2rem;
  }
}
@media (min-width: 1400px) {
  .coh-style-accordion-tabs-keyline-dark-text .coh-accordion-tabs-nav li a:hover {
    -webkit-box-shadow: inset 0 -0.125rem 0 0 rgb(38, 163, 221);
            box-shadow: inset 0 -0.125rem 0 0 rgb(38, 163, 221);
    color: rgb(0, 0, 0);
    background-color: rgba(0, 0, 0, 0);
  }
}
@media (min-width: 1400px) {
  .coh-style-accordion-tabs-solid .coh-accordion-title {
    margin-bottom: 0.0625rem;
  }
}
@media (min-width: 1400px) {
  .coh-style-accordion-tabs-solid .coh-accordion-title.is-active a {
    background-color: rgb(26, 137, 201);
  }
}
@media (min-width: 1400px) {
  .coh-style-accordion-tabs-solid .coh-accordion-title.is-active a:after {
    -webkit-transform: rotateZ(180deg);
        -ms-transform: rotate(180deg);
            transform: rotateZ(180deg);
  }
}
@media (min-width: 1400px) {
  .coh-style-accordion-tabs-solid .coh-accordion-title.is-active a:hover {
    background-color: rgb(26, 137, 201);
  }
}
@media (min-width: 565px) {
  .coh-style-accordion-tabs-solid .coh-accordion-title a {
    padding-top: 1rem;
    padding-right: 1.5rem;
    padding-bottom: 1rem;
    padding-left: 1.5rem;
  }
}
@media (min-width: 1024px) {
  .coh-style-accordion-tabs-solid .coh-accordion-title a {
    padding-right: 1.5rem;
    padding-left: 1.5rem;
  }
}
@media (min-width: 1400px) {
  .coh-style-accordion-tabs-solid .coh-accordion-title a {
    background-color: rgb(38, 163, 221);
    color: rgb(255, 255, 255);
    -webkit-transition: background-color 300ms ease;
    transition: background-color 300ms ease;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    font-size: 0.875rem;
    line-height: 1rem;
    padding-top: 1.25rem;
    padding-right: 2rem;
    padding-bottom: 1.25rem;
    padding-left: 2rem;
    font-weight: bold;
    -webkit-box-align: center;
    -webkit-align-items: center;
        -ms-flex-align: center;
            align-items: center;
  }
}
@media (min-width: 1400px) {
  .coh-style-accordion-tabs-solid .coh-accordion-title a:hover {
    background-color: rgb(112, 195, 233);
    color: rgb(255, 255, 255);
  }
}
@media (min-width: 1400px) {
  .coh-style-accordion-tabs-solid .coh-accordion-title a:after {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    margin-left: auto;
    content: \"\\f078\";
    font-family: icomoon;
    -webkit-transform: rotateZ(0deg);
        -ms-transform: rotate(0deg);
            transform: rotateZ(0deg);
    -webkit-transition: 300ms ease transform;
    transition: 300ms ease transform;
  }
}
@media (min-width: 1400px) {
  .coh-style-accordion-tabs-solid .coh-accordion-tabs-nav li {
    margin-bottom: 0;
    margin-left: 0;
  }
}
@media (min-width: 1400px) {
  .coh-style-accordion-tabs-solid .coh-accordion-tabs-nav li.is-active a {
    background-color: rgb(26, 137, 201);
  }
}
@media (min-width: 1400px) {
  .coh-style-accordion-tabs-solid .coh-accordion-tabs-nav li.is-active a:hover {
    background-color: rgb(26, 137, 201);
  }
}
@media (min-width: 565px) {
  .coh-style-accordion-tabs-solid .coh-accordion-tabs-nav li a {
    padding-top: 1rem;
    padding-bottom: 1rem;
  }
}
@media (min-width: 1024px) {
  .coh-style-accordion-tabs-solid .coh-accordion-tabs-nav li a {
    padding-right: 1.5rem;
    padding-left: 1.5rem;
  }
}
@media (min-width: 1400px) {
  .coh-style-accordion-tabs-solid .coh-accordion-tabs-nav li a {
    -webkit-transition: background-color 200ms ease;
    transition: background-color 200ms ease;
    color: rgb(255, 255, 255);
    background-color: rgb(38, 163, 221);
    font-weight: bold;
    font-size: 0.875rem;
    line-height: 1rem;
    padding-top: 1.25rem;
    padding-right: 2rem;
    padding-bottom: 1.25rem;
    padding-left: 2rem;
    margin-right: 0.0625rem;
    margin-bottom: 0.0625rem;
  }
}
@media (min-width: 1400px) {
  .coh-style-accordion-tabs-solid .coh-accordion-tabs-nav li a:hover {
    color: rgb(255, 255, 255);
    background-color: rgb(112, 195, 233);
  }
}
@media (min-width: 1400px) {
  .coh-style-paragraph-small {
    font-size: 0.75rem;
  }
}
@media (min-width: 1400px) {
  .coh-style-modal-close-button-light, .coh-style-modal-close-button-dark, .coh-style-modal-close-button-color {
    height: 3rem;
    width: 3rem;
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
    color: rgb(38, 163, 221);
    font-size: 1.5rem;
    -webkit-transition: background-color 300ms ease;
    transition: background-color 300ms ease;
    background-color: rgb(242, 242, 242);
  }
}
@media (min-width: 1400px) {
  .coh-style-modal-close-button-light:before, .coh-style-modal-close-button-dark:before, .coh-style-modal-close-button-color:before {
    content: \"✕\";
  }
}
@media (min-width: 1400px) {
  .coh-style-modal-close-button-light:hover, .coh-style-modal-close-button-dark:hover, .coh-style-modal-close-button-color:hover {
    color: rgb(26, 137, 201);
    background-color: rgb(219, 219, 220);
  }
}
@media (min-width: 1400px) {
  .coh-style-modal-close-button-color {
    color: rgb(255, 255, 255);
    background-color: rgb(38, 163, 221);
    -webkit-transition: background-color 200ms ease;
    transition: background-color 200ms ease;
  }
}
@media (min-width: 1400px) {
  .coh-style-modal-close-button-color:hover {
    background-color: rgb(112, 195, 233);
    color: rgb(255, 255, 255);
  }
}
@media (min-width: 1400px) {
  .coh-style-modal-close-button-dark {
    color: rgb(255, 255, 255);
    background-color: rgb(0, 0, 0);
    -webkit-transition: background-color 200ms ease;
    transition: background-color 200ms ease;
  }
}
@media (min-width: 1400px) {
  .coh-style-modal-close-button-dark:hover {
    background-color: rgb(72, 72, 72);
    color: rgb(255, 255, 255);
  }
}
@media (min-width: 565px) {
  .coh-style-slider-navigation-left, .coh-style-slider-navigation-right {
    width: 1.5rem;
  }
}
@media (min-width: 1024px) {
  .coh-style-slider-navigation-left, .coh-style-slider-navigation-right {
    width: 2rem;
  }
}
@media (min-width: 1400px) {
  .coh-style-slider-navigation-left, .coh-style-slider-navigation-right {
    display: -webkit-inline-box;
    display: -webkit-inline-flex;
    display: -ms-inline-flexbox;
    display: inline-flex;
    height: 3.5rem;
    width: 3rem;
    background-color: rgba(0, 0, 0, 0.25);
    -webkit-box-pack: center;
    -webkit-justify-content: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-transition: background-color 300ms ease;
    transition: background-color 300ms ease;
  }
}
@media (min-width: 565px) {
  .coh-style-slider-navigation-left:before, .coh-style-slider-navigation-right:before {
    font-size: 0.75rem;
  }
}
@media (min-width: 1400px) {
  .coh-style-slider-navigation-left:before, .coh-style-slider-navigation-right:before {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f053\";
    font-family: icomoon;
    color: rgb(255, 255, 255);
    font-size: 1rem;
    -webkit-transition: color 300ms ease;
    transition: color 300ms ease;
  }
}
@media (min-width: 1400px) {
  .coh-style-slider-navigation-left:hover, .coh-style-slider-navigation-right:hover {
    background-color: rgba(0, 0, 0, 0.5);
  }
}
@media (min-width: 1400px) {
  .coh-style-slider-navigation-right:before {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f054\";
    font-family: icomoon;
  }
}
@media (min-width: 1400px) {
  .coh-style-modal-open-button-light, .coh-style-modal-open-button-color, .coh-style-modal-open-button-dark {
    background-color: rgb(242, 242, 242);
    padding-top: 1rem;
    padding-right: 1rem;
    padding-bottom: 1rem;
    padding-left: 1rem;
    font-size: 0.875rem;
    line-height: 1.25;
    font-weight: bold;
    color: rgb(38, 163, 221);
    -webkit-transition: background-color 300ms ease;
    transition: background-color 300ms ease;
  }
}
@media (min-width: 1400px) {
  .coh-style-modal-open-button-light:hover, .coh-style-modal-open-button-color:hover, .coh-style-modal-open-button-dark:hover {
    background-color: rgb(219, 219, 220);
    color: rgb(26, 137, 201);
  }
}
@media (min-width: 1400px) {
  .coh-style-modal-open-button-dark {
    background-color: rgb(0, 0, 0);
    color: rgb(255, 255, 255);
  }
}
@media (min-width: 1400px) {
  .coh-style-modal-open-button-dark:hover {
    background-color: rgb(72, 72, 72);
    color: rgb(255, 255, 255);
  }
}
@media (min-width: 1400px) {
  .coh-style-modal-open-button-color {
    background-color: rgb(38, 163, 221);
    color: rgb(255, 255, 255);
  }
}
@media (min-width: 1400px) {
  .coh-style-modal-open-button-color:hover {
    background-color: rgb(112, 195, 233);
    color: rgb(255, 255, 255);
  }
}
@media (min-width: 1400px) {
  .coh-style-card-text-dark-background {
    color: rgb(255, 255, 255);
  }
}
@media (min-width: 1400px) {
  .coh-style-card-text-dark-background:hover .fake-link {
    color: rgb(112, 195, 233);
  }
}
@media (min-width: 1400px) {
  .coh-style-card-text-dark-background:hover .fake-button {
    background-color: rgb(112, 195, 233);
    color: rgb(255, 255, 255);
  }
}
@media (min-width: 1400px) {
  .coh-style-card-text-dark-background a {
    color: rgb(255, 255, 255);
  }
}
@media (min-width: 1400px) {
  .coh-style-card-text-dark-background .fake-link {
    color: rgb(38, 163, 221);
  }
}
@media (min-width: 1400px) {
  .coh-style-card-text-dark-background .fake-button {
    background-color: rgb(38, 163, 221);
    color: rgb(255, 255, 255);
  }
}
@media (min-width: 1400px) {
  .coh-style-card-text-dark-background .card-date {
    color: rgb(255, 255, 255);
  }
}
@media (min-width: 1400px) {
  .coh-style-card-text-dark-background .card-tag {
    color: rgb(255, 255, 255);
    background-color: rgb(38, 163, 221);
  }
}
@media (min-width: 1400px) {
  .coh-style-card-text-dark-background .card-tag:hover {
    color: rgb(255, 255, 255);
    background-color: rgb(112, 195, 233);
  }
}
@media (min-width: 1400px) {
  .coh-style-card-text-dark-background .card-person {
    color: rgb(255, 255, 255);
  }
}
@media (min-width: 1400px) {
  .coh-style-card-text-dark-background .card-person:hover {
    color: rgb(38, 163, 221);
  }
}
@media (min-width: 1400px) {
  .coh-style-card-text-dark-background .card-place {
    color: rgb(255, 255, 255);
  }
}
@media (min-width: 1400px) {
  .coh-style-card-text-dark-background .card-place:hover {
    color: rgb(38, 163, 221);
  }
}
@media (min-width: 1400px) {
  .coh-style-card-text-dark-background .card-link:hover {
    color: rgb(38, 163, 221);
  }
}
@media (min-width: 1400px) {
  .coh-style-card-text-light-background {
    color: rgb(0, 0, 0);
  }
}
@media (min-width: 1400px) {
  .coh-style-card-text-light-background:hover .fake-link {
    color: rgb(112, 195, 233);
  }
}
@media (min-width: 1400px) {
  .coh-style-card-text-light-background:hover .fake-button {
    background-color: rgb(112, 195, 233);
    color: rgb(255, 255, 255);
  }
}
@media (min-width: 1400px) {
  .coh-style-card-text-light-background a {
    color: rgb(0, 0, 0);
  }
}
@media (min-width: 1400px) {
  .coh-style-card-text-light-background .fake-link {
    color: rgb(38, 163, 221);
  }
}
@media (min-width: 1400px) {
  .coh-style-card-text-light-background .fake-button {
    background-color: rgb(38, 163, 221);
    color: rgb(255, 255, 255);
  }
}
@media (min-width: 1400px) {
  .coh-style-card-text-light-background .card-date {
    color: rgb(72, 72, 72);
  }
}
@media (min-width: 1400px) {
  .coh-style-card-text-light-background .card-tag {
    color: rgb(72, 72, 72);
    background-color: rgb(242, 242, 242);
  }
}
@media (min-width: 1400px) {
  .coh-style-card-text-light-background .card-tag:hover {
    background-color: rgb(38, 163, 221);
    color: rgb(255, 255, 255);
  }
}
@media (min-width: 1400px) {
  .coh-style-card-text-light-background .card-person {
    color: rgb(72, 72, 72);
  }
}
@media (min-width: 1400px) {
  .coh-style-card-text-light-background .card-person:hover {
    color: rgb(38, 163, 221);
  }
}
@media (min-width: 1400px) {
  .coh-style-card-text-light-background .card-place {
    color: rgb(72, 72, 72);
  }
}
@media (min-width: 1400px) {
  .coh-style-card-text-light-background .card-place:hover {
    color: rgb(38, 163, 221);
  }
}
@media (min-width: 1400px) {
  .coh-style-card-text-light-background .card-link:hover {
    color: rgb(38, 163, 221);
  }
}
@media (min-width: 1400px) {
  .coh-style-read-more-button-light {
    background-color: rgb(242, 242, 242);
    padding-top: 1rem;
    padding-right: 1rem;
    padding-bottom: 1rem;
    padding-left: 1rem;
    font-size: 0.875rem;
    line-height: 1.25;
    font-weight: bold;
    color: rgb(38, 163, 221);
    -webkit-transition: background-color 300ms ease;
    transition: background-color 300ms ease;
    display: -webkit-inline-box;
    display: -webkit-inline-flex;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
        -ms-flex-align: center;
            align-items: center;
  }
}
@media (min-width: 1400px) {
  .coh-style-read-more-button-light:hover {
    background-color: rgb(219, 219, 220);
    color: rgb(38, 163, 221);
  }
}
@media (min-width: 1400px) {
  .coh-style-read-more-button-light:after {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f078\";
    font-family: icomoon;
    font-size: 0.75rem;
    padding-left: 0.5rem;
    margin-left: auto;
  }
}
@media (min-width: 1400px) {
  .is-expanded.coh-style-read-more-button-light:after {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f077\";
    font-family: icomoon;
  }
}
@media (min-width: 1400px) {
  .coh-style-read-more-button-dark {
    background-color: rgb(0, 0, 0);
    padding-top: 1rem;
    padding-right: 1rem;
    padding-bottom: 1rem;
    padding-left: 1rem;
    font-size: 0.875rem;
    line-height: 1.25;
    font-weight: bold;
    color: rgb(255, 255, 255);
    -webkit-transition: background-color 300ms ease;
    transition: background-color 300ms ease;
    display: -webkit-inline-box;
    display: -webkit-inline-flex;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
        -ms-flex-align: center;
            align-items: center;
  }
}
@media (min-width: 1400px) {
  .coh-style-read-more-button-dark:hover {
    background-color: rgb(72, 72, 72);
    color: rgb(255, 255, 255);
  }
}
@media (min-width: 1400px) {
  .coh-style-read-more-button-dark:after {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f078\";
    font-family: icomoon;
    font-size: 0.75rem;
    padding-left: 0.5rem;
    margin-left: auto;
  }
}
@media (min-width: 1400px) {
  .is-expanded.coh-style-read-more-button-dark:after {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f077\";
    font-family: icomoon;
  }
}
@media (min-width: 1400px) {
  .coh-style-card-text-colored-background {
    color: rgb(255, 255, 255);
  }
}
@media (min-width: 1400px) {
  .coh-style-card-text-colored-background:hover .fake-link {
    color: rgb(72, 72, 72);
  }
}
@media (min-width: 1400px) {
  .coh-style-card-text-colored-background:hover .fake-button {
    background-color: rgb(72, 72, 72);
    color: rgb(255, 255, 255);
  }
}
@media (min-width: 1400px) {
  .coh-style-card-text-colored-background a {
    color: rgb(255, 255, 255);
  }
}
@media (min-width: 1400px) {
  .coh-style-card-text-colored-background .fake-link {
    color: rgb(0, 0, 0);
  }
}
@media (min-width: 1400px) {
  .coh-style-card-text-colored-background .fake-button {
    background-color: rgb(0, 0, 0);
    color: rgb(255, 255, 255);
  }
}
@media (min-width: 1400px) {
  .coh-style-card-text-colored-background .card-date {
    color: rgb(255, 255, 255);
  }
}
@media (min-width: 1400px) {
  .coh-style-card-text-colored-background .card-tag {
    color: rgb(255, 255, 255);
    background-color: rgb(0, 0, 0);
  }
}
@media (min-width: 1400px) {
  .coh-style-card-text-colored-background .card-tag:hover {
    color: rgb(255, 255, 255);
    background-color: rgb(72, 72, 72);
  }
}
@media (min-width: 1400px) {
  .coh-style-card-text-colored-background .card-person {
    color: rgb(255, 255, 255);
  }
}
@media (min-width: 1400px) {
  .coh-style-card-text-colored-background .card-person:hover {
    color: rgb(0, 0, 0);
  }
}
@media (min-width: 1400px) {
  .coh-style-card-text-colored-background .card-place {
    color: rgb(255, 255, 255);
  }
}
@media (min-width: 1400px) {
  .coh-style-card-text-colored-background .card-place:hover {
    color: rgb(0, 0, 0);
  }
}
@media (min-width: 1400px) {
  .coh-style-card-text-colored-background .card-link {
    color: rgb(255, 255, 255);
  }
}
@media (min-width: 1400px) {
  .coh-style-card-text-colored-background .card-link:hover {
    color: rgb(0, 0, 0);
  }
}
@media (min-width: 1400px) {
  .coh-style-read-more-button-color {
    background-color: rgb(38, 163, 221);
    padding-top: 1rem;
    padding-right: 1rem;
    padding-bottom: 1rem;
    padding-left: 1rem;
    font-size: 0.875rem;
    line-height: 1.25;
    font-weight: bold;
    color: rgb(255, 255, 255);
    -webkit-transition: background-color 300ms ease;
    transition: background-color 300ms ease;
    display: -webkit-inline-box;
    display: -webkit-inline-flex;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
        -ms-flex-align: center;
            align-items: center;
  }
}
@media (min-width: 1400px) {
  .coh-style-read-more-button-color:hover {
    background-color: rgb(112, 195, 233);
    color: rgb(255, 255, 255);
  }
}
@media (min-width: 1400px) {
  .coh-style-read-more-button-color:after {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f078\";
    font-family: icomoon;
    font-size: 0.75rem;
    padding-left: 0.5rem;
    margin-left: auto;
  }
}
@media (min-width: 1400px) {
  .is-expanded.coh-style-read-more-button-color:after {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f077\";
    font-family: icomoon;
  }
}
@media (min-width: 1400px) {
  .coh-style-read-more {
    padding-top: 0.5rem;
    padding-right: 1.25rem;
    padding-bottom: 0.5rem;
    font-size: 0.875rem;
    line-height: 1.25;
    font-weight: bold;
    color: rgb(38, 163, 221);
    -webkit-transition: color 300ms ease;
    transition: color 300ms ease;
  }
}
@media (min-width: 1400px) {
  .coh-style-read-more:hover {
    color: rgb(112, 195, 233);
  }
}
@media (min-width: 1400px) {
  .coh-style-read-more:after {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f078\";
    font-family: icomoon;
    font-size: 0.75rem;
    padding-left: 0.25rem;
  }
}
@media (min-width: 1400px) {
  .is-expanded.coh-style-read-more:after {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f077\";
    font-family: icomoon;
  }
}
.coh-style-heading-xl {
  font-size: 2.5rem;
}
@media (min-width: 565px) {
  .coh-style-heading-xl {
    font-size: 3rem;
  }
}
@media (min-width: 768px) {
  .coh-style-heading-xl {
    font-size: 3.5rem;
  }
}
@media (min-width: 1024px) {
  .coh-style-heading-xl {
    font-size: 4rem;
  }
}
@media (min-width: 1170px) {
  .coh-style-heading-xl {
    font-size: 4.5rem;
  }
}
@media (min-width: 1400px) {
  .coh-style-heading-xl {
    font-size: 5rem;
    line-height: 1.25;
    font-weight: bold;
    margin-bottom: 1.5rem;
  }
}
@media (min-width: 565px) {
  .coh-style-heading-1-size {
    font-size: 1.75rem;
  }
}
@media (min-width: 1024px) {
  .coh-style-heading-1-size {
    font-size: 2rem;
  }
}
@media (min-width: 1170px) {
  .coh-style-heading-1-size {
    font-size: 2.5rem;
  }
}
@media (min-width: 1400px) {
  .coh-style-heading-1-size {
    font-size: 3rem;
    line-height: 1.25;
    font-weight: bold;
    margin-bottom: 1.5rem;
  }
}
@media (min-width: 565px) {
  .coh-style-heading-2-size {
    font-size: 1.5rem;
  }
}
@media (min-width: 1170px) {
  .coh-style-heading-2-size {
    font-size: 1.75rem;
  }
}
@media (min-width: 1400px) {
  .coh-style-heading-2-size {
    font-weight: bold;
    font-size: 2rem;
    line-height: 1.25;
    margin-bottom: 1.5rem;
  }
}
@media (min-width: 565px) {
  .coh-style-heading-3-size {
    font-size: 1.25rem;
  }
}
@media (min-width: 1024px) {
  .coh-style-heading-3-size {
    font-size: 1.375rem;
  }
}
@media (min-width: 1400px) {
  .coh-style-heading-3-size {
    font-size: 1.5rem;
    line-height: 1.25;
    font-weight: bold;
    margin-bottom: 1.25rem;
  }
}
@media (min-width: 565px) {
  .coh-style-heading-4-size {
    margin-bottom: 1.25rem;
  }
}
@media (min-width: 1024px) {
  .coh-style-heading-4-size {
    font-size: 1.125rem;
  }
}
@media (min-width: 1400px) {
  .coh-style-heading-4-size {
    font-size: 1.25rem;
    font-weight: bold;
    margin-bottom: 1.375rem;
    line-height: 1.5;
    margin-bottom: 1rem;
  }
}
@media (min-width: 565px) {
  .coh-style-heading-5-size {
    margin-bottom: 1.25rem;
  }
}
@media (min-width: 1400px) {
  .coh-style-heading-5-size {
    font-size: 1rem;
    margin-bottom: 1.375rem;
    line-height: 1.25;
    margin-bottom: 0.5rem;
    font-weight: bold;
  }
}
@media (min-width: 1024px) {
  .coh-style-pre-heading, .coh-style-pre-heading-light, .coh-style-pre-heading-blue, .coh-style-pre-heading-dark {
    margin-bottom: 0.5rem;
  }
}
@media (min-width: 1400px) {
  .coh-style-pre-heading, .coh-style-pre-heading-light, .coh-style-pre-heading-blue, .coh-style-pre-heading-dark {
    font-size: 0.875rem;
    font-weight: bold;
    line-height: 1.25;
    margin-bottom: 1rem;
  }
}
@media (min-width: 1400px) {
  .coh-style-pre-heading-dark {
    color: rgb(0, 0, 0);
  }
}
@media (min-width: 1400px) {
  .coh-style-pre-heading-blue {
    color: rgb(38, 163, 221);
  }
}
@media (min-width: 1400px) {
  .coh-style-pre-heading-light {
    color: rgb(255, 255, 255);
  }
}
@media (min-width: 768px) {
  .coh-style-multi-column-two-column {
    -webkit-column-count: 1;
       -moz-column-count: 1;
            column-count: 1;
    -webkit-column-gap: 0;
       -moz-column-gap: 0;
            column-gap: 0;
  }
}
@media (min-width: 1024px) {
  .coh-style-multi-column-two-column {
    -webkit-column-gap: 1.5rem;
       -moz-column-gap: 1.5rem;
            column-gap: 1.5rem;
    -webkit-column-count: 2;
       -moz-column-count: 2;
            column-count: 2;
  }
}
@media (min-width: 1400px) {
  .coh-style-multi-column-two-column {
    -webkit-column-count: 2;
       -moz-column-count: 2;
            column-count: 2;
    -webkit-column-gap: 2rem;
       -moz-column-gap: 2rem;
            column-gap: 2rem;
  }
}
@media (min-width: 768px) {
  .coh-style-multi-column-three-column {
    -webkit-column-count: 1;
       -moz-column-count: 1;
            column-count: 1;
    -webkit-column-gap: 0;
       -moz-column-gap: 0;
            column-gap: 0;
  }
}
@media (min-width: 1024px) {
  .coh-style-multi-column-three-column {
    -webkit-column-gap: 1.5rem;
       -moz-column-gap: 1.5rem;
            column-gap: 1.5rem;
    -webkit-column-count: 2;
       -moz-column-count: 2;
            column-count: 2;
  }
}
@media (min-width: 1400px) {
  .coh-style-multi-column-three-column {
    -webkit-column-count: 3;
       -moz-column-count: 3;
            column-count: 3;
    -webkit-column-gap: 2rem;
       -moz-column-gap: 2rem;
            column-gap: 2rem;
  }
}
@media (min-width: 1024px) {
  .coh-style-margin-bottom-small {
    margin-bottom: 1.5rem;
  }
}
@media (min-width: 1400px) {
  .coh-style-margin-bottom-small {
    margin-bottom: 2rem;
  }
}
@media (min-width: 565px) {
  .coh-style-padding-top-bottom-large {
    padding-top: 3rem;
    padding-bottom: 3rem;
  }
}
@media (min-width: 1024px) {
  .coh-style-padding-top-bottom-large {
    padding-top: 4.5rem;
    padding-bottom: 4.5rem;
  }
}
@media (min-width: 1400px) {
  .coh-style-padding-top-bottom-large {
    padding-top: 6rem;
    padding-bottom: 6rem;
  }
}
@media (min-width: 1024px) {
  .coh-style-padding-top-bottom-small {
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
  }
}
@media (min-width: 1400px) {
  .coh-style-padding-top-bottom-small {
    padding-top: 2rem;
    padding-bottom: 2rem;
  }
}
@media (min-width: 565px) {
  .coh-style-padding-top-large {
    padding-top: 3rem;
  }
}
@media (min-width: 1024px) {
  .coh-style-padding-top-large {
    padding-top: 4.5rem;
  }
}
@media (min-width: 1400px) {
  .coh-style-padding-top-large {
    padding-top: 6rem;
  }
}
@media (min-width: 1024px) {
  .coh-style-padding-top-small {
    padding-top: 1.5rem;
  }
}
@media (min-width: 1400px) {
  .coh-style-padding-top-small {
    padding-top: 2rem;
  }
}
@media (min-width: 565px) {
  .coh-style-padding-bottom-large {
    padding-bottom: 3rem;
  }
}
@media (min-width: 1024px) {
  .coh-style-padding-bottom-large {
    padding-bottom: 4.5rem;
  }
}
@media (min-width: 1400px) {
  .coh-style-padding-bottom-large {
    padding-bottom: 6rem;
  }
}
@media (min-width: 1400px) {
  .coh-style-view-pagination {
    margin-top: 2.5rem;
    margin-bottom: 2.5rem;
  }
}
@media (min-width: 1400px) {
  .coh-style-view-pagination .pager__item {
    display: -webkit-inline-box;
    display: -webkit-inline-flex;
    display: -ms-inline-flexbox;
    display: inline-flex;
    list-style-type: none;
    margin-right: 0.25rem;
    margin-left: 0.25rem;
  }
}
@media (min-width: 1400px) {
  .coh-style-view-pagination .pager__item a {
    background-color: rgb(255, 255, 255);
    display: block;
    min-height: 2rem;
    min-width: 2rem;
    -webkit-border-radius: 1rem;
            border-radius: 1rem;
    line-height: 2rem;
    text-align: center;
    -webkit-transition: background-color 200ms ease;
    transition: background-color 200ms ease;
  }
}
@media (min-width: 1400px) {
  .coh-style-view-pagination .pager__item a:hover {
    background-color: rgb(38, 163, 221);
    color: rgb(255, 255, 255);
  }
}
@media (min-width: 1400px) {
  .coh-style-view-pagination .is-active a {
    background-color: rgb(0, 0, 0);
    color: rgb(255, 255, 255);
  }
}
@media (min-width: 1400px) {
  .coh-style-view-pagination .is-active a:hover {
    background-color: rgb(0, 0, 0);
  }
}
@media (min-width: 1400px) {
  .coh-style-view-pagination .pager__item--first a {
    background-color: rgba(0, 0, 0, 0);
  }
}
@media (min-width: 1400px) {
  .coh-style-view-pagination .pager__item--first a:hover {
    background-color: rgba(0, 0, 0, 0);
    color: rgb(112, 195, 233);
  }
}
@media (min-width: 1400px) {
  .coh-style-view-pagination .pager__item--last a {
    background-color: rgba(0, 0, 0, 0);
  }
}
@media (min-width: 1400px) {
  .coh-style-view-pagination .pager__item--last a:hover {
    background-color: rgba(0, 0, 0, 0);
    color: rgb(112, 195, 233);
  }
}
@media (min-width: 1024px) {
  .coh-style-padding-bottom-small {
    padding-bottom: 1.5rem;
  }
}
@media (min-width: 1400px) {
  .coh-style-padding-bottom-small {
    padding-bottom: 2rem;
  }
}
@media (min-width: 565px) {
  .coh-style-padding-left-right-large {
    padding-right: 3rem;
    padding-left: 3rem;
  }
}
@media (min-width: 1024px) {
  .coh-style-padding-left-right-large {
    padding-right: 4.5rem;
    padding-left: 4.5rem;
  }
}
@media (min-width: 1400px) {
  .coh-style-padding-left-right-large {
    padding-right: 6rem;
    padding-left: 6rem;
  }
}
@media (min-width: 1024px) {
  .coh-style-padding-left-right-small {
    padding-right: 1.5rem;
    padding-left: 1.5rem;
  }
}
@media (min-width: 1400px) {
  .coh-style-padding-left-right-small {
    padding-right: 2rem;
    padding-left: 2rem;
  }
}
@media (min-width: 1024px) {
  .coh-style-padding-small {
    padding: 1.5rem;
  }
}
@media (min-width: 1400px) {
  .coh-style-padding-small {
    padding: 2rem;
  }
}
@media (min-width: 1400px) {
  .coh-style-link-with-icon {
    color: rgb(38, 163, 221);
    display: -webkit-inline-box;
    display: -webkit-inline-flex;
    display: -ms-inline-flexbox;
    display: inline-flex;
    font-size: 0.875rem;
    line-height: 1.25;
    font-weight: bold;
    -webkit-box-align: center;
    -webkit-align-items: center;
        -ms-flex-align: center;
            align-items: center;
  }
}
@media (min-width: 1400px) {
  .coh-style-link-with-icon:after {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f054\";
    font-family: icomoon;
    padding-left: 0.375rem;
    font-size: 0.625rem;
  }
}
@media (min-width: 1400px) {
  .coh-style-link-button-dark {
    background-color: rgb(0, 0, 0);
    color: rgb(255, 255, 255);
    display: -webkit-inline-box;
    display: -webkit-inline-flex;
    display: -ms-inline-flexbox;
    display: inline-flex;
    padding-top: 1rem;
    padding-right: 1rem;
    padding-bottom: 1rem;
    padding-left: 1rem;
    -webkit-transition: background-color 300ms ease;
    transition: background-color 300ms ease;
    font-size: 0.875rem;
    line-height: 1.25;
    font-weight: bold;
    margin-top: 0.5rem;
    margin-bottom: 0.5rem;
    -webkit-box-align: center;
    -webkit-align-items: center;
        -ms-flex-align: center;
            align-items: center;
  }
}
@media (min-width: 1400px) {
  .coh-style-link-button-dark:hover {
    background-color: rgb(72, 72, 72);
    color: rgb(255, 255, 255);
  }
}
@media (min-width: 1400px) {
  .coh-style-link-button-dark:after {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f054\";
    font-family: icomoon;
    font-size: 0.75rem;
    padding-left: 0.5rem;
    margin-left: auto;
  }
}
@media (min-width: 1400px) {
  .coh-style-link-button-light {
    background-color: rgb(242, 242, 242);
    color: rgb(38, 163, 221);
    display: -webkit-inline-box;
    display: -webkit-inline-flex;
    display: -ms-inline-flexbox;
    display: inline-flex;
    padding-top: 1rem;
    padding-right: 1rem;
    padding-bottom: 1rem;
    padding-left: 1rem;
    -webkit-transition: background-color 300ms ease;
    transition: background-color 300ms ease;
    font-size: 0.875rem;
    line-height: 1.25;
    font-weight: bold;
    margin-top: 0.5rem;
    margin-bottom: 0.5rem;
    -webkit-box-align: center;
    -webkit-align-items: center;
        -ms-flex-align: center;
            align-items: center;
  }
}
@media (min-width: 1400px) {
  .coh-style-link-button-light:hover {
    background-color: rgb(219, 219, 220);
    color: rgb(38, 163, 221);
  }
}
@media (min-width: 1400px) {
  .coh-style-link-button-light:after {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f054\";
    font-family: icomoon;
    font-size: 0.75rem;
    padding-left: 0.5rem;
    margin-left: auto;
  }
}
@media (min-width: 1400px) {
  .coh-style-link-button-color {
    background-color: rgb(38, 163, 221);
    color: rgb(255, 255, 255);
    display: -webkit-inline-box;
    display: -webkit-inline-flex;
    display: -ms-inline-flexbox;
    display: inline-flex;
    padding-top: 1rem;
    padding-right: 1rem;
    padding-bottom: 1rem;
    padding-left: 1rem;
    -webkit-transition: background-color 300ms ease;
    transition: background-color 300ms ease;
    font-size: 0.875rem;
    line-height: 1.25;
    font-weight: bold;
    margin-top: 0.5rem;
    margin-bottom: 0.5rem;
    -webkit-box-align: center;
    -webkit-align-items: center;
        -ms-flex-align: center;
            align-items: center;
  }
}
@media (min-width: 1400px) {
  .coh-style-link-button-color:hover {
    background-color: rgb(112, 195, 233);
    color: rgb(255, 255, 255);
  }
}
@media (min-width: 1400px) {
  .coh-style-link-button-color:after {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f054\";
    font-family: icomoon;
    font-size: 0.75rem;
    padding-left: 0.5rem;
    margin-left: auto;
  }
}
@media (min-width: 1400px) {
  .coh-style-breadcrumbs {
    padding-top: 0.25rem;
    padding-bottom: 0.25rem;
  }
}
@media (min-width: 1400px) {
  .coh-style-breadcrumbs li {
    display: inline-block;
    margin-top: 0;
    margin-bottom: 0;
    margin-left: 0;
  }
}
@media (min-width: 1400px) {
  .coh-style-breadcrumbs li:before {
    content: normal;
  }
}
@media (min-width: 565px) {
  .coh-style-breadcrumbs li:after {
    padding-right: 0.25rem;
    padding-left: 0.25rem;
  }
}
@media (min-width: 1400px) {
  .coh-style-breadcrumbs li:after {
    content: \"/\";
    font-size: 0.75rem;
    padding-right: 0.375rem;
    padding-left: 0.375rem;
    color: rgb(38, 163, 221);
    font-weight: 700;
  }
}
@media (min-width: 565px) {
  .coh-style-breadcrumbs li a {
    font-size: 0.625rem;
  }
}
@media (min-width: 1024px) {
  .coh-style-breadcrumbs li a {
    font-size: 0.75rem;
  }
}
@media (min-width: 1400px) {
  .coh-style-breadcrumbs li a {
    font-size: 0.875rem;
    font-weight: bold;
  }
}
@media (min-width: 1400px) {
  .coh-style-video .mejs__layers .mejs__overlay.mejs__overlay-play .mejs__overlay-button {
    background-color: rgb(38, 163, 221);
    -webkit-border-radius: 50%;
            border-radius: 50%;
    position: relative;
    -webkit-transition: background-color 300ms ease-in-out;
    transition: background-color 300ms ease-in-out;
    background-image: none;
  }
}
@media (min-width: 1400px) {
  .coh-style-video .mejs__layers .mejs__overlay.mejs__overlay-play .mejs__overlay-button:before {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f04b\";
    font-family: icomoon;
    color: rgb(255, 255, 255);
    font-size: 1.5rem;
    position: absolute;
    top: 50%;
    left: 55%;
    -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
  }
}
@media (min-width: 1400px) {
  .coh-style-video .mejs__layers .mejs__overlay.mejs__overlay-play .mejs__overlay-button:hover {
    background-color: rgb(26, 137, 201);
  }
}
@media (min-width: 1400px) {
  .coh-style-video .mejs__layers .mejs__overlay .mejs__overlay-loading .mejs__overlay-loading-bg-img {
    background: none;
    border-width: 0.625rem;
    -webkit-border-radius: 3.125rem;
            border-radius: 3.125rem;
    border-style: solid;
    border-top-color: rgba(0, 0, 0, 0.2);
    border-bottom-color: rgba(0, 0, 0, 0.2);
    border-left-color: rgb(38, 163, 221);
    border-right-color: rgba(0, 0, 0, 0.2);
  }
}
@media (min-width: 1400px) {
  .coh-style-video .mejs__controls {
    z-index: 2;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    background-color: rgb(38, 163, 221);
    background-image: none;
    padding: 0;
  }
}
@media (min-width: 1400px) {
  .coh-style-video .mejs__controls .mejs__button {
    line-height: normal;
    height: 2.5rem;
    width: 2.5rem;
  }
}
@media (min-width: 1400px) {
  .coh-style-video .mejs__controls .mejs__button.mejs__play button:before {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f04b\";
    font-family: icomoon;
    font-size: 1rem;
  }
}
@media (min-width: 1400px) {
  .coh-style-video .mejs__controls .mejs__button.mejs__pause button:before {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f04c\";
    font-family: icomoon;
    font-size: 1rem;
  }
}
@media (min-width: 1400px) {
  .coh-style-video .mejs__controls .mejs__button.mejs__replay button:before {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f01e\";
    font-family: icomoon;
    font-size: 1rem;
  }
}
@media (min-width: 1400px) {
  .coh-style-video .mejs__controls .mejs__button.mejs__mute button:before {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f026\";
    font-family: icomoon;
    font-size: 1.25rem;
  }
}
@media (min-width: 1400px) {
  .coh-style-video .mejs__controls .mejs__button.mejs__unmute button:before {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f028\";
    font-family: icomoon;
    font-size: 1.25rem;
  }
}
@media (min-width: 1400px) {
  .coh-style-video .mejs__controls .mejs__button.mejs__fullscreen-button.mejs__unfullscreen button:before {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f065\";
    font-family: icomoon;
    font-size: 1rem;
  }
}
@media (min-width: 1400px) {
  .coh-style-video .mejs__controls .mejs__button.mejs__fullscreen-button button:before {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f065\";
    font-family: icomoon;
    font-size: 1rem;
  }
}
@media (min-width: 1400px) {
  .coh-style-video .mejs__controls .mejs__button button {
    color: rgb(255, 255, 255);
    font-size: 1.875rem;
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
    height: 2.5rem;
    width: 2.5rem;
    background-image: none;
    background-color: rgba(0, 0, 0, 0);
    -webkit-transition: background-color 300ms ease-in-out;
    transition: background-color 300ms ease-in-out;
    margin: 0;
  }
}
@media (min-width: 1400px) {
  .coh-style-video .mejs__controls .mejs__button button:hover {
    background-color: rgb(112, 195, 233);
  }
}
@media (min-width: 1400px) {
  .coh-style-video .mejs__controls .mejs__button .mejs__volume-slider {
    background-color: rgb(38, 163, 221);
  }
}
@media (min-width: 1400px) {
  .coh-style-video .mejs__controls .mejs__button .mejs__volume-slider .mejs__volume-total .mejs__volume-handle {
    background-color: rgb(26, 137, 201);
  }
}
@media (min-width: 1400px) {
  .coh-style-video .mejs__controls .mejs__time {
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
    color: rgb(255, 255, 255);
    height: 2.5rem;
    width: 2.5rem;
    font-size: 0.75rem;
    padding: 0;
  }
}
@media (min-width: 1400px) {
  .coh-style-video .mejs__controls .mejs__time-rail {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
        -ms-flex-align: center;
            align-items: center;
    height: 2.5rem;
    padding: 0;
    margin: 0;
  }
}
@media (min-width: 1400px) {
  .coh-style-video .mejs__controls .mejs__time-rail .mejs__time-total {
    margin: 0;
  }
}
@media (min-width: 565px) {
  .coh-style-paragraph-extra-large {
    font-size: 2rem;
  }
}
@media (min-width: 1024px) {
  .coh-style-paragraph-extra-large {
    font-size: 2.5rem;
  }
}
@media (min-width: 1400px) {
  .coh-style-paragraph-extra-large {
    font-size: 3rem;
    font-weight: bold;
    margin-bottom: 0;
    line-height: 1.25;
  }
}
@media (min-width: 1024px) {
  .coh-style-paragraph-large {
    font-size: 1.25rem;
  }
}
@media (min-width: 1400px) {
  .coh-style-paragraph-large {
    font-size: 1.5rem;
    line-height: 1.5;
  }
}
@media (min-width: 1400px) {
  .coh-style-tick-list {
    margin-bottom: 0;
  }
}
@media (min-width: 1400px) {
  .coh-style-tick-list li {
    list-style-type: none;
    margin-bottom: 1rem;
    margin-left: 0;
    font-size: 1rem;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: start;
    -webkit-align-items: start;
        -ms-flex-align: start;
            align-items: start;
  }
}
@media (min-width: 1400px) {
  .coh-style-tick-list li:before {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f00c\";
    font-family: icomoon;
    color: rgb(255, 255, 255);
    margin-top: 0.1875rem;
    margin-right: 0.5rem;
    background-color: rgb(38, 163, 221);
    height: 1rem;
    width: 1rem;
    -webkit-border-radius: 0.5rem;
            border-radius: 0.5rem;
    font-size: 0.625rem;
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
    -webkit-flex-shrink: 0;
        -ms-flex-negative: 0;
            flex-shrink: 0;
  }
}
@media (min-width: 1400px) {
  .coh-style-slider-pagination {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
        -ms-flex-direction: row;
            flex-direction: row;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
        -ms-flex-align: center;
            align-items: center;
  }
}
@media (min-width: 1400px) {
  .coh-style-slider-pagination li {
    display: -webkit-inline-box;
    display: -webkit-inline-flex;
    display: -ms-inline-flexbox;
    display: inline-flex;
    margin-bottom: 0;
    margin-left: 0;
  }
}
@media (min-width: 1400px) {
  .coh-style-slider-pagination li:before {
    content: normal;
  }
}
@media (min-width: 1400px) {
  .coh-style-slider-pagination li.slick-active button {
    background-color: rgb(26, 137, 201);
    height: 0.625rem;
    width: 0.625rem;
    -webkit-border-radius: 0.3125rem;
            border-radius: 0.3125rem;
  }
}
@media (min-width: 1400px) {
  .coh-style-slider-pagination li button {
    background-color: rgb(38, 163, 221);
    height: 0.375rem;
    width: 0.375rem;
    -webkit-border-radius: 0.25rem;
            border-radius: 0.25rem;
    margin-right: 0.25rem;
    margin-left: 0.25rem;
    -webkit-transition: background-color 300ms ease;
    transition: background-color 300ms ease;
  }
}
@media (min-width: 1400px) {
  .coh-style-slider-pagination li button:hover {
    background-color: rgb(112, 195, 233);
  }
}
@media (min-width: 1400px) {
  .move-pagination-up.coh-ce-1dc117b7-c5baa27a .slick-dots {
    top: -2rem;
  }
}
@media (min-width: 1400px) {
  .move-pagination-down.coh-ce-1dc117b7-c5baa27a .slick-dots {
    padding-top: 1rem;
  }
}
@media (min-width: 565px) {
  .padding-left-right.coh-ce-1dc117b7-c5baa27a .coh-slider-container-mid {
    padding-right: 2rem;
    padding-left: 2rem;
  }
}
@media (min-width: 1024px) {
  .padding-left-right.coh-ce-1dc117b7-c5baa27a .coh-slider-container-mid {
    padding-right: 3.5rem;
    padding-left: 3.5rem;
  }
}
@media (min-width: 1400px) {
  .padding-left-right.coh-ce-1dc117b7-c5baa27a .coh-slider-container-mid {
    padding-right: 5rem;
    padding-left: 5rem;
  }
}
@media (min-width: 1400px) {
  .color-arrows.coh-ce-1dc117b7-c5baa27a .slick-arrow {
    background-color: rgba(0, 0, 0, 0);
  }
}
@media (min-width: 1400px) {
  .color-arrows.coh-ce-1dc117b7-c5baa27a .slick-arrow:hover {
    background-color: rgba(0, 0, 0, 0);
  }
}
@media (min-width: 1400px) {
  .color-arrows.coh-ce-1dc117b7-c5baa27a .slick-arrow:hover:before {
    color: rgb(112, 195, 233);
  }
}
@media (min-width: 1400px) {
  .color-arrows.coh-ce-1dc117b7-c5baa27a .slick-arrow:before {
    color: rgb(38, 163, 221);
  }
}
@media (min-width: 1400px) {
  .dark-arrows.coh-ce-1dc117b7-c5baa27a .slick-arrow {
    background-color: rgba(0, 0, 0, 0);
  }
}
@media (min-width: 1400px) {
  .dark-arrows.coh-ce-1dc117b7-c5baa27a .slick-arrow:hover {
    background-color: rgba(0, 0, 0, 0);
  }
}
@media (min-width: 1400px) {
  .dark-arrows.coh-ce-1dc117b7-c5baa27a .slick-arrow:hover:before {
    color: rgb(72, 72, 72);
  }
}
@media (min-width: 1400px) {
  .dark-arrows.coh-ce-1dc117b7-c5baa27a .slick-arrow:before {
    color: rgb(0, 0, 0);
  }
}
@media (min-width: 1400px) {
  .light-arrows.coh-ce-1dc117b7-c5baa27a .slick-arrow {
    background-color: rgba(0, 0, 0, 0);
  }
}
@media (min-width: 1400px) {
  .light-arrows.coh-ce-1dc117b7-c5baa27a .slick-arrow:hover {
    background-color: rgba(0, 0, 0, 0);
  }
}
@media (min-width: 1400px) {
  .light-arrows.coh-ce-1dc117b7-c5baa27a .slick-arrow:hover:before {
    color: rgb(219, 219, 220);
  }
}
@media (min-width: 1400px) {
  .light-arrows.coh-ce-1dc117b7-c5baa27a .slick-arrow:before {
    color: rgb(255, 255, 255);
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_background_video-3a31c24c {
    position: relative;
    z-index: -1;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_background_video-5cc67da2 {
    width: 100%;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_blockquote-eebeed73 {
    padding-right: 0;
    padding-left: 0;
    border-left-style: none;
    margin-bottom: 0;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_blockquote-eebeed73:before {
    padding-left: 0;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_blockquote-50ab9410 {
    font-size: 1rem;
    line-height: 1rem;
    padding-top: 1.5rem;
    margin-top: auto;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_blockquote-553a8b89 {
    display: block;
    font-weight: bold;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_blockquote-5baee877 {
    display: block;
    margin-top: 0.5rem;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_blockquote-bf1797a2 {
    font-style: normal;
    font-size: 0.75rem;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_breadcrumbs-b00f9d69 {
    padding-top: 0;
    padding-bottom: 0;
  }
}
@media (min-width: 1400px) {
  .transparent-background.coh-ce-cpt_breadcrumbs-b00f9d69 {
    background-color: rgba(0, 0, 0, 0);
  }
}
@media (min-width: 1400px) {
  .solid-dark-background.coh-ce-cpt_breadcrumbs-b00f9d69 {
    background-color: rgb(34, 34, 34);
  }
}
@media (min-width: 1400px) {
  .solid-light-background.coh-ce-cpt_breadcrumbs-b00f9d69 {
    background-color: rgb(242, 242, 242);
  }
}
@media (min-width: 1400px) {
  .semi-transparent-dark-background.coh-ce-cpt_breadcrumbs-b00f9d69 {
    background-color: rgba(0, 0, 0, 0.5);
    color: rgb(255, 255, 255);
  }
}
@media (min-width: 1400px) {
  .position-absolute-top-left.coh-ce-cpt_breadcrumbs-b00f9d69 {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 2;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_column_0-9431213c {
    min-height: 100%;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
        -ms-flex-direction: column;
            flex-direction: column;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_contact_information_card-b76fe74a {
    height: 100%;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
        -ms-flex-direction: column;
            flex-direction: column;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_contact_information_card-466af053 {
    margin-bottom: 0.75rem;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_contact_information_card-42bc939c {
    font-style: normal;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_contact_information_card-cc55f948 {
    width: 3rem;
    margin-bottom: 1.5rem;
    -webkit-box-ordinal-group: 0;
    -webkit-order: -1;
        -ms-flex-order: -1;
            order: -1;
    -webkit-align-self: flex-start;
        -ms-flex-item-align: start;
            align-self: flex-start;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_content_card-3045e827 {
    height: 100%;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
        -ms-flex-direction: column;
            flex-direction: column;
    padding-top: 0;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_content_card-466af053 {
    margin-bottom: 0.75rem;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_content_card-3df446bf:after {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    content: \"\";
    z-index: 1;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_content_card-92be551f {
    margin-top: auto;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_content_card-59cddfc1 {
    -webkit-box-ordinal-group: 0;
    -webkit-order: -1;
        -ms-flex-order: -1;
            order: -1;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_drop_zone_and_wide_image-40886e00 {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
        -ms-flex-direction: row;
            flex-direction: row;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
            justify-content: space-between;
  }
}
@media (min-width: 1400px) {
  .image-drop-zone-desktop.coh-ce-cpt_drop_zone_and_wide_image-40886e00 {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: reverse;
    -webkit-flex-direction: row-reverse;
        -ms-flex-direction: row-reverse;
            flex-direction: row-reverse;
  }
}
@media (min-width: 1400px) {
  .image-drop-zone-desktop.coh-ce-cpt_drop_zone_and_wide_image-40886e00 .image-column {
    -webkit-box-pack: end;
    -webkit-justify-content: flex-end;
        -ms-flex-pack: end;
            justify-content: flex-end;
  }
}
@media (min-width: 768px) {
  .image-drop-zone-tablet.coh-ce-cpt_drop_zone_and_wide_image-40886e00 {
    -webkit-box-orient: vertical;
    -webkit-box-direction: reverse;
    -webkit-flex-direction: column-reverse;
        -ms-flex-direction: column-reverse;
            flex-direction: column-reverse;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_drop_zone_and_wide_image-2265c5c {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
        -ms-flex-direction: column;
            flex-direction: column;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
        -ms-flex-pack: center;
            justify-content: center;
  }
}
@media (min-width: 565px) {
  .coh-ce-cpt_drop_zone_and_wide_image-bf5611cb {
    padding-top: 3rem;
  }
}
@media (min-width: 768px) {
  .coh-ce-cpt_drop_zone_and_wide_image-bf5611cb {
    padding-top: 4.5rem;
    padding-bottom: 0;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_drop_zone_and_wide_image-399455a4 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
  }
}
@media (min-width: 565px) {
  .coh-ce-cpt_drop_zone_and_wide_image-232e84bb {
    padding-bottom: 3rem;
  }
}
@media (min-width: 768px) {
  .coh-ce-cpt_drop_zone_and_wide_image-232e84bb {
    height: auto;
    min-width: 100%;
    padding-bottom: 4.5rem;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_drop_zone_and_wide_image-232e84bb {
    min-width: 50vw;
    height: 100%;
    -webkit-box-align: center;
    -webkit-align-items: center;
        -ms-flex-align: center;
            align-items: center;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
  }
}
@media (min-width: 768px) {
  .image-object-fit-cover.coh-ce-cpt_drop_zone_and_wide_image-232e84bb img {
    height: auto;
  }
}
@media (min-width: 1400px) {
  .image-object-fit-cover.coh-ce-cpt_drop_zone_and_wide_image-232e84bb img {
    -o-object-fit: cover;
       object-fit: cover;
    height: 100%;
    width: 100%;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_drop_zone_and_wide_image-232e84bb img {
    min-width: 100%;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_feature_card-466af053 {
    margin-bottom: 0.75rem;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_feature_card-cc55f948 {
    width: 3rem;
    margin-bottom: 1.5rem;
    -webkit-box-ordinal-group: 0;
    -webkit-order: -1;
        -ms-flex-order: -1;
            order: -1;
    -webkit-align-self: flex-start;
        -ms-flex-item-align: start;
            align-self: flex-start;
  }
}
@media (min-width: 1400px) {
  .move-pagination-up.coh-ce-cpt_gallery_slider-4d540297 .slick-dots {
    top: -2rem;
  }
}
@media (min-width: 1400px) {
  .move-pagination-down.coh-ce-cpt_gallery_slider-4d540297 .slick-dots {
    top: 1.5rem;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_heading-a59c0ad8 {
    display: block;
  }
}
@media (min-width: 1400px) {
  .dark-heading.coh-ce-cpt_heading-a59c0ad8 {
    color: rgb(0, 0, 0);
  }
}
@media (min-width: 1400px) {
  .light-heading.coh-ce-cpt_heading-a59c0ad8 {
    color: rgb(255, 255, 255);
  }
}
@media (min-width: 1400px) {
  .color-heading.coh-ce-cpt_heading-a59c0ad8 {
    color: rgb(38, 163, 221);
  }
}
@media (min-width: 1400px) {
  .align-text-left.coh-ce-cpt_heading-a59c0ad8 {
    text-align: left;
  }
}
@media (min-width: 1400px) {
  .align-text-center.coh-ce-cpt_heading-a59c0ad8 {
    text-align: center;
  }
}
@media (min-width: 1400px) {
  .align-text-right.coh-ce-cpt_heading-a59c0ad8 {
    text-align: right;
  }
}
@media (min-width: 1024px) {
  .coh-ce-cpt_hero-fedf769c {
    padding-right: 1.5rem;
    padding-left: 1.5rem;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_hero-fedf769c {
    padding-right: 2rem;
    padding-left: 2rem;
  }
}
@media (min-width: 1400px) {
  .transparent-background.coh-ce-cpt_hero-fedf769c {
    background-color: rgba(0, 0, 0, 0);
  }
}
@media (min-width: 1400px) {
  .solid-dark-background.coh-ce-cpt_hero-fedf769c {
    background-color: rgb(34, 34, 34);
  }
}
@media (min-width: 1400px) {
  .solid-light-background.coh-ce-cpt_hero-fedf769c {
    background-color: rgb(242, 242, 242);
  }
}
@media (min-width: 1400px) {
  .semi-transparent-dark-background.coh-ce-cpt_hero-fedf769c {
    background-color: rgba(0, 0, 0, 0.5);
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_hero-48d68960 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
  }
}
@media (min-width: 1400px) {
  .fluid.coh-ce-cpt_hero-48d68960 {
    min-height: 80vh;
  }
}
@media (min-width: 565px) {
  .tall.coh-ce-cpt_hero-48d68960 {
    min-height: 25rem;
  }
}
@media (min-width: 1024px) {
  .tall.coh-ce-cpt_hero-48d68960 {
    min-height: 35rem;
  }
}
@media (min-width: 1170px) {
  .tall.coh-ce-cpt_hero-48d68960 {
    min-height: 37.5rem;
  }
}
@media (min-width: 1400px) {
  .tall.coh-ce-cpt_hero-48d68960 {
    min-height: 40rem;
  }
}
@media (min-width: 565px) {
  .short.coh-ce-cpt_hero-48d68960 {
    min-height: 10rem;
  }
}
@media (min-width: 1024px) {
  .short.coh-ce-cpt_hero-48d68960 {
    min-height: 15rem;
  }
}
@media (min-width: 1400px) {
  .short.coh-ce-cpt_hero-48d68960 {
    min-height: 20rem;
  }
}
@media (min-width: 1400px) {
  .center-align-content.coh-ce-cpt_hero-48d68960 {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
        -ms-flex-direction: column;
            flex-direction: column;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
        -ms-flex-align: center;
            align-items: center;
  }
}
@media (min-width: 1400px) {
  .center-align-content.coh-ce-cpt_hero-48d68960 .coh-wysiwyg {
    text-align: center;
  }
}
@media (min-width: 768px) {
  .center-align-content.coh-ce-cpt_hero-48d68960 .text-content {
    width: 100%;
  }
}
@media (min-width: 1024px) {
  .center-align-content.coh-ce-cpt_hero-48d68960 .text-content {
    width: 72%;
  }
}
@media (min-width: 1400px) {
  .center-align-content.coh-ce-cpt_hero-48d68960 .text-content {
    width: 64%;
    text-align: center;
  }
}
@media (min-width: 565px) {
  .center-align-content.coh-ce-cpt_hero-48d68960 .drop-zone-content {
    margin-top: 3rem;
  }
}
@media (min-width: 768px) {
  .center-align-content.coh-ce-cpt_hero-48d68960 .drop-zone-content {
    width: 100%;
  }
}
@media (min-width: 1024px) {
  .center-align-content.coh-ce-cpt_hero-48d68960 .drop-zone-content {
    width: 72%;
  }
}
@media (min-width: 1400px) {
  .center-align-content.coh-ce-cpt_hero-48d68960 .drop-zone-content {
    -webkit-box-flex: 0;
    -webkit-flex-grow: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    width: 64%;
    margin-top: 4rem;
  }
}
@media (min-width: 1400px) {
  .center-align-content.coh-ce-cpt_hero-48d68960 .buttons {
    -webkit-box-pack: center;
    -webkit-justify-content: center;
        -ms-flex-pack: center;
            justify-content: center;
  }
}
@media (min-width: 768px) {
  .left-align-content.coh-ce-cpt_hero-48d68960 {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
        -ms-flex-direction: column;
            flex-direction: column;
  }
}
@media (min-width: 1400px) {
  .left-align-content.coh-ce-cpt_hero-48d68960 {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
        -ms-flex-direction: row;
            flex-direction: row;
    -webkit-box-align: center;
    -webkit-align-items: center;
        -ms-flex-align: center;
            align-items: center;
  }
}
@media (min-width: 768px) {
  .left-align-content.coh-ce-cpt_hero-48d68960 .text-content {
    width: 100%;
  }
}
@media (min-width: 1024px) {
  .left-align-content.coh-ce-cpt_hero-48d68960 .text-content {
    width: 48%;
  }
}
@media (min-width: 1400px) {
  .left-align-content.coh-ce-cpt_hero-48d68960 .text-content {
    width: 32%;
  }
}
@media (min-width: 565px) {
  .left-align-content.coh-ce-cpt_hero-48d68960 .drop-zone-content {
    margin-top: 3rem;
  }
}
@media (min-width: 768px) {
  .left-align-content.coh-ce-cpt_hero-48d68960 .drop-zone-content {
    width: 100%;
    margin-top: 4rem;
    margin-left: 0;
    -webkit-box-flex: 0;
    -webkit-flex-grow: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
  }
}
@media (min-width: 1400px) {
  .left-align-content.coh-ce-cpt_hero-48d68960 .drop-zone-content {
    margin-left: 7.5rem;
  }
}
@media (min-width: 768px) {
  .right-align-content.coh-ce-cpt_hero-48d68960 {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
        -ms-flex-direction: column;
            flex-direction: column;
  }
}
@media (min-width: 1400px) {
  .right-align-content.coh-ce-cpt_hero-48d68960 {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: reverse;
    -webkit-flex-direction: row-reverse;
        -ms-flex-direction: row-reverse;
            flex-direction: row-reverse;
    -webkit-box-align: center;
    -webkit-align-items: center;
        -ms-flex-align: center;
            align-items: center;
  }
}
@media (min-width: 768px) {
  .right-align-content.coh-ce-cpt_hero-48d68960 .text-content {
    width: 100%;
  }
}
@media (min-width: 1024px) {
  .right-align-content.coh-ce-cpt_hero-48d68960 .text-content {
    width: 48%;
  }
}
@media (min-width: 1400px) {
  .right-align-content.coh-ce-cpt_hero-48d68960 .text-content {
    width: 32%;
  }
}
@media (min-width: 565px) {
  .right-align-content.coh-ce-cpt_hero-48d68960 .drop-zone-content {
    margin-top: 3rem;
  }
}
@media (min-width: 768px) {
  .right-align-content.coh-ce-cpt_hero-48d68960 .drop-zone-content {
    width: 100%;
    margin-top: 4rem;
    margin-right: 0;
    -webkit-box-flex: 0;
    -webkit-flex-grow: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
  }
}
@media (min-width: 1400px) {
  .right-align-content.coh-ce-cpt_hero-48d68960 .drop-zone-content {
    margin-right: 7.5rem;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_hero-77bc8a97 {
    -webkit-flex-shrink: 0;
        -ms-flex-negative: 0;
            flex-shrink: 0;
  }
}
@media (min-width: 1400px) {
  .colored.coh-ce-cpt_hero-fd5ded85 {
    color: rgb(38, 163, 221);
  }
}
@media (min-width: 1024px) {
  .add-space-below.coh-ce-cpt_hero-55f19225 {
    margin-bottom: 1.5rem;
  }
}
@media (min-width: 1400px) {
  .add-space-below.coh-ce-cpt_hero-55f19225 {
    margin-bottom: 2rem;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_hero-65b810ab {
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_horizontal_content_card-466af053 {
    margin-bottom: 0.75rem;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_horizontal_content_card-3df446bf:after {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    content: \"\";
    z-index: 1;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_horizontal_content_card-92be551f {
    margin-top: auto;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_horizontal_content_card-9b2e5e08 {
    min-height: 1px;
  }
}
@media (min-width: 1400px) {
  .image-object-fit-cover.coh-ce-cpt_horizontal_content_card-9b2e5e08 {
    -o-object-fit: cover;
       object-fit: cover;
    height: 100%;
    width: 100%;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_image-2cc57305 {
    min-height: 1px;
  }
}
@media (min-width: 1400px) {
  .fill-space-available.coh-ce-cpt_image-2cc57305 {
    -o-object-fit: cover;
       object-fit: cover;
    width: 100%;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
        -ms-flex-direction: column;
            flex-direction: column;
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_impact_card-c4fa5111 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
        -ms-flex-direction: column;
            flex-direction: column;
    max-width: 25rem;
    height: 100%;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_impact_card-466af053 {
    margin-bottom: 0.75rem;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_impact_card-63e38b8f {
    color: rgb(255, 255, 255);
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_impact_card-63e38b8f:after {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    content: \"\";
    z-index: 2;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_impact_card-38bc85ac {
    -webkit-flex-basis: 0;
        -ms-flex-preferred-size: 0;
            flex-basis: 0;
    -webkit-align-self: flex-start;
        -ms-flex-item-align: start;
            align-self: flex-start;
    margin-top: auto;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_link-b25617c6 {
    margin-right: 0.5rem;
    margin-left: 0.5rem;
  }
}
@media (min-width: 1024px) {
  .add-space-below.coh-ce-cpt_link-b25617c6 {
    margin-bottom: 1.5rem;
  }
}
@media (min-width: 1400px) {
  .add-space-below.coh-ce-cpt_link-b25617c6 {
    margin-bottom: 2rem;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_linked_feature_card-466af053 {
    margin-bottom: 0.75rem;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_linked_feature_card-b0f595f9:after {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    content: \"\";
    z-index: 1;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_linked_feature_card-92be551f {
    margin-top: auto;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_linked_feature_card-cc55f948 {
    width: 3rem;
    margin-bottom: 1.5rem;
    -webkit-box-ordinal-group: 0;
    -webkit-order: -1;
        -ms-flex-order: -1;
            order: -1;
    -webkit-align-self: flex-start;
        -ms-flex-item-align: start;
            align-self: flex-start;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_logo_card-7e0447e5 {
    -webkit-flex-shrink: 0;
        -ms-flex-negative: 0;
            flex-shrink: 0;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_logo_card-6456e07e {
    position: absolute;
    height: 100%;
    width: 100%;
    z-index: 1;
  }
}
@media (min-width: 1024px) {
  .coh-ce-cpt_modal_window-50d5c6fb {
    max-height: -webkit-calc(100vh - 3rem);
    max-height: calc(100vh - 3rem);
    padding: 1.5rem;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_modal_window-50d5c6fb {
    overflow: auto;
    max-height: -webkit-calc(100vh - 4rem);
    max-height: calc(100vh - 4rem);
    -webkit-overflow-scrolling: touch;
    padding: 2rem;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_price_card-6c50e96c {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
        -ms-flex-direction: column;
            flex-direction: column;
    -webkit-box-align: center;
    -webkit-align-items: center;
        -ms-flex-align: center;
            align-items: center;
    padding-top: 0;
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_price_card-13c60bc1 {
    margin-bottom: 0;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_price_card-12c4107e:after {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    content: \"\";
    z-index: 1;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_price_card-6eb4d95c {
    margin-top: 2rem;
    margin-bottom: 2rem;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_price_card-b2503be0 {
    display: -webkit-inline-box;
    display: -webkit-inline-flex;
    display: -ms-inline-flexbox;
    display: inline-flex;
    margin-top: auto;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_price_card-1775711d {
    margin-left: -0.5rem;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_price_card-77973a3b {
    font-size: 3.125rem;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_price_card-5d509b1 {
    font-size: 0.875rem;
    font-weight: bold;
    margin-bottom: 1.5rem;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_price_card-d17cb34a {
    margin-top: 1.5rem;
    -webkit-align-self: center;
        -ms-flex-item-align: center;
            align-self: center;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_price_card-5289bcbf {
    margin-bottom: 1.5rem;
    -webkit-box-ordinal-group: 0;
    -webkit-order: -1;
        -ms-flex-order: -1;
            order: -1;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_profile_card-70163efb {
    margin-bottom: 0.375rem;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_profile_card-41b10bd:after {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    content: \"\";
    height: 100%;
    width: 100%;
    z-index: 1;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_profile_card-12f61887 {
    display: inline-block;
    font-size: 0.875rem;
    line-height: 1.5;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_profile_card-59cddfc1 {
    -webkit-box-ordinal-group: 0;
    -webkit-order: -1;
        -ms-flex-order: -1;
            order: -1;
  }
}
@media (min-width: 565px) {
  .coh-ce-cpt_site_footer-cfba3f7d {
    padding-right: 0;
    padding-left: 0;
    height: auto;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
        -ms-flex-direction: row;
            flex-direction: row;
  }
}
@media (min-width: 768px) {
  .coh-ce-cpt_site_footer-cfba3f7d {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
  }
}
@media (min-width: 1024px) {
  .coh-ce-cpt_site_footer-cfba3f7d {
    height: 5rem;
    padding-right: 2rem;
    padding-left: 2rem;
  }
}
@media (min-width: 565px) {
  .coh-ce-cpt_site_footer-bb438e8f {
    height: auto;
  }
}
@media (min-width: 1024px) {
  .coh-ce-cpt_site_footer-bb438e8f {
    height: 100%;
    -webkit-flex-basis: 100%;
        -ms-flex-preferred-size: 100%;
            flex-basis: 100%;
  }
}
@media (min-width: 565px) {
  .coh-ce-cpt_site_footer-608d19ca {
    -webkit-flex-basis: auto;
        -ms-flex-preferred-size: auto;
            flex-basis: auto;
  }
}
@media (min-width: 1024px) {
  .coh-ce-cpt_site_footer-608d19ca {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-flex-basis: 0;
        -ms-flex-preferred-size: 0;
            flex-basis: 0;
    -webkit-flex-shrink: 1;
        -ms-flex-negative: 1;
            flex-shrink: 1;
  }
}
@media (min-width: 565px) {
  .coh-ce-cpt_site_footer-608d19ca:before {
    margin-left: 0;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_site_footer-608d19ca:before {
    margin-left: auto;
  }
}
@media (min-width: 1400px) {
  .menu-position-desktop--left .coh-ce-cpt_site_footer-608d19ca {
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
  }
}
@media (min-width: 1400px) {
  .menu-position-desktop--center .coh-ce-cpt_site_footer-608d19ca {
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
  }
}
@media (min-width: 565px) {
  .menu-position-desktop--right .coh-ce-cpt_site_footer-608d19ca {
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
  }
}
@media (min-width: 1400px) {
  .menu-position-desktop--right .coh-ce-cpt_site_footer-608d19ca {
    -webkit-box-flex: 0;
    -webkit-flex-grow: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
  }
}
@media (min-width: 565px) {
  .coh-ce-cpt_site_footer-ad4597a7 {
    height: auto;
    padding-right: 0;
    padding-left: 0;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
        -ms-flex-direction: column;
            flex-direction: column;
    -webkit-box-align: center;
    -webkit-align-items: center;
        -ms-flex-align: center;
            align-items: center;
  }
}
@media (min-width: 1024px) {
  .coh-ce-cpt_site_footer-ad4597a7 {
    height: 5rem;
    padding-right: 2rem;
    padding-left: 2rem;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_site_footer-ad4597a7 p {
    font-size: 0.75rem;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_site_footer-ad4597a7 p:last-child {
    margin-bottom: 0;
  }
}
@media (min-width: 565px) {
  .coh-ce-cpt_site_footer-abb5e470 {
    margin-right: 0;
    -webkit-flex-basis: auto;
        -ms-flex-preferred-size: auto;
            flex-basis: auto;
    -webkit-flex-shrink: 0;
        -ms-flex-negative: 0;
            flex-shrink: 0;
    height: 5rem;
    text-align: center;
  }
}
@media (min-width: 1024px) {
  .coh-ce-cpt_site_footer-abb5e470 {
    margin-right: 1rem;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-flex-basis: 0;
        -ms-flex-preferred-size: 0;
            flex-basis: 0;
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
    -webkit-flex-shrink: 1;
        -ms-flex-negative: 1;
            flex-shrink: 1;
  }
}
@media (min-width: 565px) {
  .coh-ce-cpt_site_footer-abb5e470:after {
    margin-right: 0;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_site_footer-abb5e470:after {
    margin-right: auto;
  }
}
@media (min-width: 565px) {
  .coh-ce-cpt_site_footer-100f69e3 {
    margin-left: 0;
    -webkit-flex-basis: auto;
        -ms-flex-preferred-size: auto;
            flex-basis: auto;
    -webkit-flex-shrink: 0;
        -ms-flex-negative: 0;
            flex-shrink: 0;
    height: 5rem;
    text-align: center;
    max-width: 17.5rem;
  }
}
@media (min-width: 1024px) {
  .coh-ce-cpt_site_footer-100f69e3 {
    margin-left: 1rem;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-flex-basis: 0;
        -ms-flex-preferred-size: 0;
            flex-basis: 0;
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
    -webkit-flex-shrink: 1;
        -ms-flex-negative: 1;
            flex-shrink: 1;
    max-width: 10.5rem;
  }
}
@media (min-width: 1170px) {
  .coh-ce-cpt_site_footer-100f69e3 {
    max-width: 17.5rem;
  }
}
@media (min-width: 565px) {
  .coh-ce-cpt_site_footer-100f69e3:before {
    margin-left: 0;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_site_footer-100f69e3:before {
    margin-left: auto;
  }
}
@media (min-width: 768px) {
  .coh-ce-cpt_site_header-8fee8eaa {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
            flex-wrap: wrap;
  }
}
@media (min-width: 1400px) {
  .header-position--relative.coh-ce-cpt_site_header-8fee8eaa {
    position: relative;
    z-index: 3;
    top: 0;
    left: 0;
    right: 0;
  }
}
@media (min-width: 768px) {
  .header-position--fixed.coh-ce-cpt_site_header-8fee8eaa {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 3;
  }
}
@media (min-width: 768px) {
  .menu-column-count-desktop-4.coh-ce-cpt_site_header-8fee8eaa .main-menu .menu-level-2 {
    -webkit-column-count: 1;
       -moz-column-count: 1;
            column-count: 1;
  }
}
@media (min-width: 1400px) {
  .menu-column-count-desktop-4.coh-ce-cpt_site_header-8fee8eaa .main-menu .menu-level-2 {
    -webkit-column-count: 4;
       -moz-column-count: 4;
            column-count: 4;
  }
}
@media (min-width: 768px) {
  .menu-column-count-desktop-3.coh-ce-cpt_site_header-8fee8eaa .main-menu .menu-level-2 {
    -webkit-column-count: 1;
       -moz-column-count: 1;
            column-count: 1;
  }
}
@media (min-width: 1400px) {
  .menu-column-count-desktop-3.coh-ce-cpt_site_header-8fee8eaa .main-menu .menu-level-2 {
    -webkit-column-count: 3;
       -moz-column-count: 3;
            column-count: 3;
  }
}
@media (min-width: 768px) {
  .menu-column-count-desktop-2.coh-ce-cpt_site_header-8fee8eaa .main-menu .menu-level-2 {
    -webkit-column-count: 1;
       -moz-column-count: 1;
            column-count: 1;
  }
}
@media (min-width: 1400px) {
  .menu-column-count-desktop-2.coh-ce-cpt_site_header-8fee8eaa .main-menu .menu-level-2 {
    -webkit-column-count: 2;
       -moz-column-count: 2;
            column-count: 2;
  }
}
@media (min-width: 1400px) {
  .menu-column-count-desktop-1.coh-ce-cpt_site_header-8fee8eaa .main-menu .menu-level-1 > li {
    position: relative;
  }
}
@media (min-width: 768px) {
  .menu-column-count-desktop-1.coh-ce-cpt_site_header-8fee8eaa .main-menu .menu-level-2-wrapper {
    width: auto;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
    left: 0 !important;
  }
}
@media (min-width: 1400px) {
  .menu-column-count-desktop-1.coh-ce-cpt_site_header-8fee8eaa .main-menu .menu-level-2-wrapper {
    width: 20rem;
    -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
            transform: translateX(-50%);
    left: 50% !important;
    right: auto;
  }
}
@media (min-width: 1400px) {
  .menu-column-count-desktop-1.coh-ce-cpt_site_header-8fee8eaa .main-menu .menu-level-2-wrapper > .coh-container-boxed {
    max-width: none;
    margin-right: 0;
    margin-left: 0;
  }
}
@media (min-width: 1400px) {
  .menu-column-count-desktop-1.coh-ce-cpt_site_header-8fee8eaa .main-menu .menu-level-2 {
    -webkit-column-count: 1;
       -moz-column-count: 1;
            column-count: 1;
  }
}
@media (min-width: 1400px) {
  .toolbar-horizontal.toolbar-fixed .header-position--fixed.coh-ce-cpt_site_header-8fee8eaa {
    top: 2.4375rem;
  }
}
@media (min-width: 1400px) {
  .toolbar-horizontal.toolbar-fixed.toolbar-tray-open .header-position--fixed.coh-ce-cpt_site_header-8fee8eaa {
    top: 4.9375rem;
  }
}
@media (min-width: 1400px) {
  .toolbar-vertical.toolbar-fixed .header-position--fixed.coh-ce-cpt_site_header-8fee8eaa {
    top: 2.4375rem;
  }
}
@media (min-width: 768px) {
  .coh-ce-cpt_site_header-c8c962e4 {
    padding-right: 1rem;
    padding-left: 1rem;
    height: 60px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
  }
}
@media (min-width: 1024px) {
  .coh-ce-cpt_site_header-c8c962e4 {
    height: 105px;
    padding-right: 2rem;
    padding-left: 2rem;
  }
}
@media (min-width: 768px) {
  .coh-ce-cpt_site_header-eb214483 {
    max-height: 3rem;
  }
}
@media (min-width: 1024px) {
  .coh-ce-cpt_site_header-eb214483 {
    max-height: 5rem;
    width: auto;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_slide_item-2ee1ff76 {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
        -ms-flex-direction: column;
            flex-direction: column;
    display: -webkit-box !important;
    display: -webkit-flex !important;
    display: -ms-flexbox !important;
    display: flex !important;
  }
}
@media (min-width: 565px) {
  .coh-ce-cpt_social_links-2a3f696 {
    -webkit-flex-basis: 100%;
        -ms-flex-preferred-size: 100%;
            flex-basis: 100%;
  }
}
@media (min-width: 768px) {
  .coh-ce-cpt_social_links-2a3f696 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
  }
}
@media (min-width: 1024px) {
  .coh-ce-cpt_social_links-2a3f696 {
    margin-bottom: 0;
  }
}
@media (min-width: 1024px) {
  .coh-ce-cpt_social_links-387179b {
    margin-bottom: 0;
    margin-left: 0;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
    -webkit-flex-shrink: 0;
        -ms-flex-negative: 0;
            flex-shrink: 0;
    list-style-type: none;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_social_links-387179b {
    list-style-type: none;
  }
}
@media (min-width: 565px) {
  .coh-ce-cpt_social_links-c4565a08 {
    width: auto;
  }
}
@media (min-width: 1024px) {
  .coh-ce-cpt_social_links-c4565a08 {
    font-size: 0.875rem;
    height: 2.5rem;
    width: 2rem;
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
}
.facebook.coh-ce-cpt_social_links-c4565a08:before {
  line-height: 1.0;
  font-weight: normal;
  text-transform: none;
  speak: none;
  font-variant: normal;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: \"\\f09a\";
  font-family: icomoon;
}
@media (min-width: 1400px) {
  .facebook.coh-ce-cpt_social_links-c4565a08:before {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f09a\";
    font-family: icomoon;
  }
}
@media (min-width: 1400px) {
  .twitter.coh-ce-cpt_social_links-c4565a08:before {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f099\";
    font-family: icomoon;
  }
}
@media (min-width: 1400px) {
  .linkedin.coh-ce-cpt_social_links-c4565a08:before {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f0e1\";
    font-family: icomoon;
  }
}
@media (min-width: 1400px) {
  .youtube.coh-ce-cpt_social_links-c4565a08:before {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f16a\";
    font-family: icomoon;
  }
}
@media (min-width: 1400px) {
  .vimeo.coh-ce-cpt_social_links-c4565a08:before {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f27d\";
    font-family: icomoon;
  }
}
.instagram.coh-ce-cpt_social_links-c4565a08:before {
  line-height: 1.0;
  font-weight: normal;
  text-transform: none;
  speak: none;
  font-variant: normal;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: \"\\f16d\";
  font-family: icomoon;
}
@media (min-width: 1400px) {
  .instagram.coh-ce-cpt_social_links-c4565a08:before {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f16d\";
    font-family: icomoon;
  }
}
@media (min-width: 1400px) {
  .medium.coh-ce-cpt_social_links-c4565a08:before {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f23a\";
    font-family: icomoon;
  }
}
@media (min-width: 1400px) {
  .pinterest.coh-ce-cpt_social_links-c4565a08:before {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f231\";
    font-family: icomoon;
  }
}
@media (min-width: 1400px) {
  .rss.coh-ce-cpt_social_links-c4565a08:before {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f09e\";
    font-family: icomoon;
  }
}
@media (min-width: 1400px) {
  .behance.coh-ce-cpt_social_links-c4565a08:before {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f1b4\";
    font-family: icomoon;
  }
}
@media (min-width: 1400px) {
  .drupal.coh-ce-cpt_social_links-c4565a08:before {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f1a9\";
    font-family: icomoon;
  }
}
@media (min-width: 1400px) {
  .github.coh-ce-cpt_social_links-c4565a08:before {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f09b\";
    font-family: icomoon;
  }
}
@media (min-width: 1400px) {
  .xing.coh-ce-cpt_social_links-c4565a08:before {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f168\";
    font-family: icomoon;
  }
}
@media (min-width: 1400px) {
  .bitbucket.coh-ce-cpt_social_links-c4565a08:before {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f171\";
    font-family: icomoon;
  }
}
@media (min-width: 1400px) {
  .whatsapp.coh-ce-cpt_social_links-c4565a08:before {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f232\";
    font-family: icomoon;
  }
}
@media (min-width: 1400px) {
  .slideshare.coh-ce-cpt_social_links-c4565a08:before {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f1e7\";
    font-family: icomoon;
  }
}
@media (min-width: 1400px) {
  .flickr.coh-ce-cpt_social_links-c4565a08:before {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f16e\";
    font-family: icomoon;
  }
}
.vkontakte.coh-ce-cpt_social_links-c4565a08:before {
  line-height: 1.0;
  font-weight: normal;
  text-transform: none;
  speak: none;
  font-variant: normal;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: \"\\f189\";
  font-family: icomoon;
}
@media (min-width: 1400px) {
  .vkontakte.coh-ce-cpt_social_links-c4565a08:before {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f189\";
    font-family: icomoon;
  }
}
@media (min-width: 1400px) {
  .tumblr.coh-ce-cpt_social_links-c4565a08:before {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f173\";
    font-family: icomoon;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_social_links_card-849e44df {
    margin-bottom: 1rem;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_social_links_card-33a132e2 {
    margin-right: -0.25rem;
    margin-bottom: 0;
    margin-left: -0.25rem;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_social_links_card-5dada3cd {
    margin-bottom: 0.5rem;
  }
}
@media (min-width: 1400px) {
  .facebook.coh-ce-cpt_social_links_card-bb596a78:before {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f09a\";
    font-family: icomoon;
  }
}
@media (min-width: 1400px) {
  .twitter.coh-ce-cpt_social_links_card-bb596a78:before {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f099\";
    font-family: icomoon;
  }
}
@media (min-width: 1400px) {
  .linkedin.coh-ce-cpt_social_links_card-bb596a78:before {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f0e1\";
    font-family: icomoon;
  }
}
@media (min-width: 1400px) {
  .youtube.coh-ce-cpt_social_links_card-bb596a78:before {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f16a\";
    font-family: icomoon;
  }
}
@media (min-width: 1400px) {
  .vimeo.coh-ce-cpt_social_links_card-bb596a78:before {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f27d\";
    font-family: icomoon;
  }
}
@media (min-width: 1400px) {
  .instagram.coh-ce-cpt_social_links_card-bb596a78:before {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f16d\";
    font-family: icomoon;
  }
}
@media (min-width: 1400px) {
  .medium.coh-ce-cpt_social_links_card-bb596a78:before {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f23a\";
    font-family: icomoon;
  }
}
@media (min-width: 1400px) {
  .pinterest.coh-ce-cpt_social_links_card-bb596a78:before {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f231\";
    font-family: icomoon;
  }
}
@media (min-width: 1400px) {
  .rss.coh-ce-cpt_social_links_card-bb596a78:before {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f09e\";
    font-family: icomoon;
  }
}
@media (min-width: 1400px) {
  .behance.coh-ce-cpt_social_links_card-bb596a78:before {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f1b4\";
    font-family: icomoon;
  }
}
@media (min-width: 1400px) {
  .drupal.coh-ce-cpt_social_links_card-bb596a78:before {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f1a9\";
    font-family: icomoon;
  }
}
@media (min-width: 1400px) {
  .github.coh-ce-cpt_social_links_card-bb596a78:before {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f09b\";
    font-family: icomoon;
  }
}
@media (min-width: 1400px) {
  .xing.coh-ce-cpt_social_links_card-bb596a78:before {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f168\";
    font-family: icomoon;
  }
}
@media (min-width: 1400px) {
  .bitbucket.coh-ce-cpt_social_links_card-bb596a78:before {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f171\";
    font-family: icomoon;
  }
}
@media (min-width: 1400px) {
  .whatsapp.coh-ce-cpt_social_links_card-bb596a78:before {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f232\";
    font-family: icomoon;
  }
}
@media (min-width: 1400px) {
  .slideshare.coh-ce-cpt_social_links_card-bb596a78:before {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f1e7\";
    font-family: icomoon;
  }
}
@media (min-width: 1400px) {
  .flickr.coh-ce-cpt_social_links_card-bb596a78:before {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f16e\";
    font-family: icomoon;
  }
}
@media (min-width: 1400px) {
  .vkontakte.coh-ce-cpt_social_links_card-bb596a78:before {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f189\";
    font-family: icomoon;
  }
}
@media (min-width: 1400px) {
  .tumblr.coh-ce-cpt_social_links_card-bb596a78:before {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f173\";
    font-family: icomoon;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_stat_card-b76fe74a {
    height: 100%;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
        -ms-flex-direction: column;
            flex-direction: column;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_stat_card-5e7d51c3 {
    font-weight: bold;
    display: block;
    margin-bottom: 1rem;
  }
}
@media (min-width: 565px) {
  .large.coh-ce-cpt_stat_card-5e7d51c3 {
    font-size: 3.5rem;
  }
}
@media (min-width: 1024px) {
  .large.coh-ce-cpt_stat_card-5e7d51c3 {
    font-size: 4.5rem;
  }
}
@media (min-width: 1400px) {
  .large.coh-ce-cpt_stat_card-5e7d51c3 {
    font-size: 6rem;
  }
}
@media (min-width: 565px) {
  .medium.coh-ce-cpt_stat_card-5e7d51c3 {
    font-size: 2.5rem;
  }
}
@media (min-width: 1024px) {
  .medium.coh-ce-cpt_stat_card-5e7d51c3 {
    font-size: 3.5rem;
  }
}
@media (min-width: 1400px) {
  .medium.coh-ce-cpt_stat_card-5e7d51c3 {
    font-size: 4.5rem;
  }
}
@media (min-width: 565px) {
  .small.coh-ce-cpt_stat_card-5e7d51c3 {
    font-size: 1.5rem;
  }
}
@media (min-width: 1024px) {
  .small.coh-ce-cpt_stat_card-5e7d51c3 {
    font-size: 2.5rem;
  }
}
@media (min-width: 1400px) {
  .small.coh-ce-cpt_stat_card-5e7d51c3 {
    font-size: 3.5rem;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_stat_card-9703bc5a {
    font-weight: bold;
    font-size: 0.875rem;
    display: block;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_stat_card-42588cf7 {
    width: 3rem;
    margin-bottom: 1rem;
    -webkit-box-ordinal-group: 0;
    -webkit-order: -1;
        -ms-flex-order: -1;
            order: -1;
    -webkit-align-self: flex-start;
        -ms-flex-item-align: start;
            align-self: flex-start;
  }
}
@media (min-width: 1024px) {
  .space-between-nav-content.coh-ce-cpt_tabs_container_vertical_tabs-a902b84a .coh-accordion-tabs-content {
    padding-left: 0;
  }
}
@media (min-width: 1400px) {
  .space-between-nav-content.coh-ce-cpt_tabs_container_vertical_tabs-a902b84a .coh-accordion-tabs-content {
    padding-left: 11.5%;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_tabs_container_vertical_tabs-a902b84a .coh-accordion-tabs-nav {
    -webkit-box-shadow: none;
            box-shadow: none;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_testimonial_card-3154f319 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
        -ms-flex-direction: column;
            flex-direction: column;
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_testimonial_card-aa01a782 {
    border-left-style: none;
    padding-right: 0;
    padding-left: 0;
    margin-bottom: 0;
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_testimonial_card-2f2a169e {
    margin-top: auto;
    padding-top: 1.5rem;
    line-height: 1rem;
    font-size: 1rem;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_testimonial_card-29a98c9a {
    -webkit-border-radius: 100%;
            border-radius: 100%;
    width: 3.5rem;
    margin-right: auto;
    margin-bottom: 1.5rem;
    margin-left: auto;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_testimonial_card-174b89fd {
    margin-bottom: 0.5rem;
    font-weight: bold;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_testimonial_card-92c7cc8a {
    padding-bottom: 0.25rem;
    font-size: 0.875rem;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_testimonial_card-18495c3e {
    font-size: 0.875rem;
  }
}
@media (min-width: 565px) {
  .coh-ce-cpt_utilities_bar_horizontal-439fe304 {
    display: none;
  }
}
@media (min-width: 768px) {
  .coh-ce-cpt_utilities_bar_horizontal-439fe304 {
    display: none;
  }
}
@media (min-width: 1024px) {
  .coh-ce-cpt_utilities_bar_horizontal-439fe304 {
    height: 2.5rem;
    padding-right: 1.875rem;
    padding-left: 1.875rem;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
        -ms-flex-direction: row;
            flex-direction: row;
    -webkit-box-pack: end;
    -webkit-justify-content: flex-end;
        -ms-flex-pack: end;
            justify-content: flex-end;
    -webkit-box-align: center;
    -webkit-align-items: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-flex-basis: 100%;
        -ms-flex-preferred-size: 100%;
            flex-basis: 100%;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_utilities_bar_horizontal-439fe304 .utilities-menu li {
    padding-right: 0.75rem;
    padding-left: 0.75rem;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_utilities_bar_horizontal-439fe304 .social-links a {
    width: 2rem;
  }
}
@media (min-width: 1024px) {
  .coh-ce-cpt_utilities_bar_horizontal-7c684faf {
    height: 100%;
  }
}
@media (min-width: 768px) {
  .coh-ce-cpt_utilities_bar_horizontal-7c684faf + * {
    margin-left: 0;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_utilities_bar_horizontal-7c684faf + * {
    margin-left: 1rem;
  }
}
@media (min-width: 768px) {
  .coh-ce-cpt_utilities_bar_vertical-81040a3c {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_utilities_bar_vertical-81040a3c {
    -webkit-flex-basis: 100%;
        -ms-flex-preferred-size: 100%;
            flex-basis: 100%;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
        -ms-flex-direction: column;
            flex-direction: column;
    -webkit-box-pack: stretch;
    -webkit-justify-content: stretch;
        -ms-flex-pack: stretch;
            justify-content: stretch;
    -webkit-box-align: stretch;
    -webkit-align-items: stretch;
        -ms-flex-align: stretch;
            align-items: stretch;
    display: none;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_utilities_bar_vertical-81040a3c .social-links a {
    width: auto;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_utilities_bar_vertical-80f39919 {
    height: 100%;
  }
}
@media (min-width: 768px) {
  .coh-ce-cpt_utilities_bar_vertical-80f39919 + * {
    margin-left: 0;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_utilities_bar_vertical-80f39919 + * {
    margin-left: 1rem;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_utilities_bar_vertical-80f39919 ul {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
        -ms-flex-direction: column;
            flex-direction: column;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_utilities_bar_vertical-80f39919 a {
    padding-top: 0.75rem;
    padding-right: 1rem;
    padding-bottom: 0.75rem;
    padding-left: 1rem;
  }
}
@media (min-width: 1400px) {
  .coh-ce-cpt_video-ea901c4e {
    width: 100%;
  }
}
@media (min-width: 1400px) {
  .coh-ce-6f78460f {
    overflow: hidden;
    position: relative;
  }
}
.coh-ce-2f92c37f {
  font-family: 'Montserrat', sans-serif;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  font-weight: 700;
  color: rgb(119, 121, 117);
}
@media (min-width: 565px) {
  .coh-ce-2f92c37f {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
        -ms-flex-direction: row;
            flex-direction: row;
    -webkit-box-align: center;
    -webkit-align-items: center;
        -ms-flex-align: center;
            align-items: center;
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
  }
}
@media (min-width: 768px) {
  .coh-ce-2f92c37f {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
  }
}
@media (min-width: 1024px) {
  .coh-ce-2f92c37f {
    height: 100%;
  }
}
@media (min-width: 565px) {
  .coh-ce-6d7dc078 {
    padding-right: 0;
    padding-left: 0;
  }
}
@media (min-width: 1024px) {
  .coh-ce-6d7dc078 {
    padding-right: 0.75rem;
    padding-left: 0.75rem;
  }
}
@media (min-width: 565px) {
  .coh-ce-e2a3ffeb {
    padding-top: 0.25rem;
    padding-right: 1rem;
    padding-bottom: 0.25rem;
    padding-left: 1rem;
  }
}
@media (min-width: 1024px) {
  .coh-ce-e2a3ffeb {
    font-size: 1rem;
    height: 100%;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
        -ms-flex-align: center;
            align-items: center;
  }
}
@media (min-width: 768px) {
  .coh-ce-bf15d041 {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
        -ms-flex-direction: row;
            flex-direction: row;
    height: 100%;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
  }
}
@media (min-width: 1024px) {
  .coh-ce-bf15d041 {
    height: 100%;
  }
}
@media (min-width: 768px) {
  .coh-ce-73b58dbc {
    padding-right: 0;
    padding-left: 0;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
        -ms-flex-direction: column;
            flex-direction: column;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
        -ms-flex-pack: center;
            justify-content: center;
  }
}
@media (min-width: 1024px) {
  .coh-ce-73b58dbc {
    padding-right: 0.75rem;
    padding-left: 0.75rem;
  }
}
.coh-ce-73b58dbc:first-child {
  margin-left: 0;
}
@media (min-width: 1400px) {
  .has-children.is-collapsed.coh-ce-73b58dbc > a:after {
    -webkit-transform: rotateZ(0deg);
        -ms-transform: rotate(0deg);
            transform: rotateZ(0deg);
  }
}
@media (min-width: 1400px) {
  .has-children.is-expanded.coh-ce-73b58dbc > a:after {
    -webkit-transform: rotateZ(180deg);
        -ms-transform: rotate(180deg);
            transform: rotateZ(180deg);
  }
}
@media (min-width: 768px) {
  .has-children.coh-ce-73b58dbc > a {
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
            justify-content: space-between;
  }
}
@media (min-width: 1400px) {
  .has-children.coh-ce-73b58dbc > a {
    -webkit-box-pack: start;
    -webkit-justify-content: flex-start;
        -ms-flex-pack: start;
            justify-content: flex-start;
  }
}
@media (min-width: 1400px) {
  .has-children.coh-ce-73b58dbc > a:after {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f107\";
    font-family: icomoon;
    -webkit-transition: 200ms ease-in-out transform;
    transition: 200ms ease-in-out transform;
    display: -webkit-inline-box;
    display: -webkit-inline-flex;
    display: -ms-inline-flexbox;
    display: inline-flex;
    margin-left: 0.5rem;
  }
}
.coh-ce-a328fbce {
  font-family: 'Montserrat', sans-serif;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  font-weight: 600;
  color: rgb(0, 0, 0);
}
@media (min-width: 768px) {
  .coh-ce-a328fbce {
    padding-right: 1rem;
    padding-left: 1rem;
    height: auto;
  }
}
@media (min-width: 1024px) {
  .coh-ce-a328fbce {
    font-size: 1rem;
    height: 100%;
    padding-top: 0.75rem;
    padding-bottom: 0.75rem;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
        -ms-flex-align: center;
            align-items: center;
  }
}
@media (min-width: 768px) {
  .coh-ce-9e7f72ef {
    position: static;
  }
}
@media (min-width: 1400px) {
  .coh-ce-9e7f72ef {
    position: absolute;
    top: 100%;
    display: none;
    z-index: 1;
    left: 0;
    right: 0;
    pointer-events: none;
  }
}
@media (min-width: 768px) {
  .coh-ce-9891be7f {
    margin-right: 0;
    margin-left: 0;
    padding-top: 0;
    padding-bottom: 0;
    padding-left: 0.75rem;
  }
}
@media (min-width: 1400px) {
  .coh-ce-9891be7f {
    padding-top: 1.5rem;
    padding-bottom: 3rem;
    pointer-events: auto;
  }
}
@media (min-width: 1400px) {
  .coh-ce-41faece7 {
    margin-top: 0;
    margin-bottom: 0;
    -webkit-column-gap: 0;
       -moz-column-gap: 0;
            column-gap: 0;
    -webkit-column-fill: balance;
       -moz-column-fill: balance;
            column-fill: balance;
  }
}
@media (min-width: 768px) {
  .coh-ce-4c431097 {
    padding-right: 0;
    padding-left: 1rem;
  }
}
@media (min-width: 1400px) {
  .coh-ce-4c431097 {
    list-style-type: none;
    margin-left: 0;
    padding-right: 1.5rem;
    padding-left: 1.5rem;
    display: inline-block;
    width: 100%;
  }
}
@media (min-width: 1400px) {
  .coh-ce-5d9b5c92 {
    padding-top: 0.75rem;
    padding-bottom: 0.75rem;
    display: -webkit-inline-box;
    display: -webkit-inline-flex;
    display: -ms-inline-flexbox;
    display: inline-flex;
    width: 100%;
    font-size: 0.875rem;
  }
}
@media (min-width: 1400px) {
  .coh-ce-7666841d {
    margin-top: 0;
    margin-bottom: 0;
  }
}
@media (min-width: 1400px) {
  .coh-ce-d344be45 {
    margin-left: 0;
    list-style-type: none;
    padding-left: 1rem;
  }
}
@media (min-width: 1400px) {
  .coh-ce-769e1d0 {
    padding-top: 0.75rem;
    padding-bottom: 0.75rem;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    font-size: 0.875rem;
  }
}
@media (min-width: 1400px) {
  .coh-ce-9c23e4ec {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    height: 100%;
  }
}
@media (min-width: 1400px) {
  .coh-ce-4be69de6 {
    font-size: 0.75rem;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
        -ms-flex-align: center;
            align-items: center;
    height: 100%;
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
        return "__string_template__7c08be61e2263a238eecd651a541a808";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__7c08be61e2263a238eecd651a541a808", "");
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
