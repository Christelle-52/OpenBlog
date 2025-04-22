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

/* _partials/_navbar.html.twig */
class __TwigTemplate_22610c872191339d878d8128798f06e2 extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_navbar.html.twig"));

        // line 1
        yield "<nav class=\"navbar\" id=\"main-navbar\">
    <div class=\"navbar-container\">
        <a href=\"";
        // line 3
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_main");
        yield "\" class=\"navbar-logo\">
            <img src=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.png"), "html", null, true);
        yield "\" alt=\"Logo OpenBlog\">
        </a>
        <span class=\"nav-button\">
            <svg viewBox=\"0 0 100 80\" width=\"40\" height=\"40\">
                <rect width=\"100\" height=\"15\" rx =\"8\"></rect>
                <rect y=\"35\" width=\"100\" height=\"15\" rx =\"8\"></rect>
                <rect y=\"70\" width=\"100\" height=\"15\" rx =\"8\"></rect>
            </svg>
        </span>
        <ul class=\"nav-menu\">
            <li class=\"nav-item active\">
                <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_main");
        yield "\">";
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home", [], "messages");
        yield "</a>
            </li>
            <li class=\"nav-item\">
                <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_posts_index");
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Posts"), "html", null, true);
        yield "</a>
            </li>
            <li class=\"nav-item\">
                <a href=\"#\">";
        // line 21
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Categories", [], "messages");
        yield "</a>
            </li>
            <li class=\"nav-item\">
                <a href=\"#\">";
        // line 24
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Authors", [], "messages");
        yield "</a>
            </li>
            <li class=\"nav-item\">
                <a href=\"#\">";
        // line 27
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Contact", [], "messages");
        yield "</a>
            </li>
            <li class=\"nav-item\">
                <a href=\"#\">";
        // line 30
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search", [], "messages");
        yield "</a>
            </li>
            <li class=\"nav-item\">
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new RuntimeError('Variable "locales" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 34
            yield "                    ";
            if (($context["locale"] != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "request", [], "any", false, false, false, 34), "locale", [], "any", false, false, false, 34))) {
                // line 35
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("change_locale", ["locale" => $context["locale"]]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["locale"], "html", null, true);
                yield "</a>
                    ";
            }
            // line 37
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['locale'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "            </li>
        </ul>
    </div>

</nav>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "_partials/_navbar.html.twig";
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
        return array (  131 => 38,  125 => 37,  117 => 35,  114 => 34,  110 => 33,  104 => 30,  98 => 27,  92 => 24,  86 => 21,  78 => 18,  70 => 15,  56 => 4,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<nav class=\"navbar\" id=\"main-navbar\">
    <div class=\"navbar-container\">
        <a href=\"{{ path('app_main') }}\" class=\"navbar-logo\">
            <img src=\"{{ asset('assets/images/logo.png') }}\" alt=\"Logo OpenBlog\">
        </a>
        <span class=\"nav-button\">
            <svg viewBox=\"0 0 100 80\" width=\"40\" height=\"40\">
                <rect width=\"100\" height=\"15\" rx =\"8\"></rect>
                <rect y=\"35\" width=\"100\" height=\"15\" rx =\"8\"></rect>
                <rect y=\"70\" width=\"100\" height=\"15\" rx =\"8\"></rect>
            </svg>
        </span>
        <ul class=\"nav-menu\">
            <li class=\"nav-item active\">
                <a href=\"{{ path('app_main') }}\">{% trans %}Home{% endtrans %}</a>
            </li>
            <li class=\"nav-item\">
                <a href=\"{{ path('app_posts_index') }}\">{{ 'Posts'|trans }}</a>
            </li>
            <li class=\"nav-item\">
                <a href=\"#\">{% trans %}Categories{% endtrans %}</a>
            </li>
            <li class=\"nav-item\">
                <a href=\"#\">{% trans %}Authors{% endtrans %}</a>
            </li>
            <li class=\"nav-item\">
                <a href=\"#\">{% trans %}Contact{% endtrans %}</a>
            </li>
            <li class=\"nav-item\">
                <a href=\"#\">{% trans %}Search{% endtrans %}</a>
            </li>
            <li class=\"nav-item\">
                {% for locale in locales %}
                    {% if locale != app.request.locale %}
                        <a href=\"{{ path('change_locale', {locale: locale}) }}\">{{ locale }}</a>
                    {% endif %}
                {% endfor %}
            </li>
        </ul>
    </div>

</nav>", "_partials/_navbar.html.twig", "/var/www/templates/_partials/_navbar.html.twig");
    }
}
