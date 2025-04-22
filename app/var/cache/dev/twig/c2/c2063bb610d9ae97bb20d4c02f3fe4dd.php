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

/* main/index.html.twig */
class __TwigTemplate_6e3c784edc473a3c9ae4075b93c96a95 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Accueil";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <header class=\"hero\">
        <img src=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/articles/") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["lastPost"]) || array_key_exists("lastPost", $context) ? $context["lastPost"] : (function () { throw new RuntimeError('Variable "lastPost" does not exist.', 7, $this->source); })()), "featuredImage", [], "any", false, false, false, 7)), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lastPost"]) || array_key_exists("lastPost", $context) ? $context["lastPost"] : (function () { throw new RuntimeError('Variable "lastPost" does not exist.', 7, $this->source); })()), "title", [], "any", false, false, false, 7), "html", null, true);
        yield "\">
        <div class=\"hero-content\">
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lastPost"]) || array_key_exists("lastPost", $context) ? $context["lastPost"] : (function () { throw new RuntimeError('Variable "lastPost" does not exist.', 9, $this->source); })()), "categories", [], "any", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 10
            yield "                <span class=\"badge badge-primary badge-lg\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 10), "html", null, true);
            yield "</span>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        yield "            <h2><a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_posts_details", ["slug" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["lastPost"]) || array_key_exists("lastPost", $context) ? $context["lastPost"] : (function () { throw new RuntimeError('Variable "lastPost" does not exist.', 12, $this->source); })()), "slug", [], "any", false, false, false, 12)]), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lastPost"]) || array_key_exists("lastPost", $context) ? $context["lastPost"] : (function () { throw new RuntimeError('Variable "lastPost" does not exist.', 12, $this->source); })()), "title", [], "any", false, false, false, 12), "html", null, true);
        yield "</a></h2>
            ";
        // line 16
        yield "            <p>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["lastPost"]) || array_key_exists("lastPost", $context) ? $context["lastPost"] : (function () { throw new RuntimeError('Variable "lastPost" does not exist.', 16, $this->source); })()), "users", [], "any", false, false, false, 16), "nickname", [], "any", false, false, false, 16), "html", null, true);
        yield "</p>
        </div>
    </header>
    <div class=\"clear\"></div>
    <main class=\"container\">
        <section>
            <h2 class=\"text-center mt-3 mb-5\">Derniers Articles</h2>
            <div class=\"grid\">
                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 25
            yield "                    <article class=\"card\">
                        <img src=\"";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/articles/mini/300x300-") . CoreExtension::getAttribute($this->env, $this->source, $context["post"], "featuredImage", [], "any", false, false, false, 26)), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 26), "html", null, true);
            yield "\">
                        <div class=\"card-body\">
                            ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, false, 28));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 29
                yield "                                <span class=\"badge badge-primary\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 29), "html", null, true);
                yield "</span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            yield "                            <h3><a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_posts_details", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 31)]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 31), "html", null, true);
            yield "</a></h3>
                            <p>";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "users", [], "any", false, false, false, 32), "nickname", [], "any", false, false, false, 32), "html", null, true);
            yield "</p>
                        </div>
                        ";
            // line 34
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("POST_EDIT", $context["post"])) {
                // line 35
                yield "                            <div class=\"card-footer\">
                                <a href=\"";
                // line 36
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_posts_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 36)]), "html", null, true);
                yield "\">Modifier</a>
                            </div>
                        ";
            }
            // line 39
            yield "                    </article>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['post'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        yield "            </div>
        </section>
        <section>
            <h2 class=\"text-center mt-3 mb-5\">Auteurs actifs</h2>
            ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["authors"]) || array_key_exists("authors", $context) ? $context["authors"] : (function () { throw new RuntimeError('Variable "authors" does not exist.', 45, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
            // line 46
            yield "                <h3>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["author"], 0, [], "array", false, false, false, 46), "nickname", [], "any", false, false, false, 46), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["author"], "total", [], "any", false, false, false, 46), "html", null, true);
            yield "</h3>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['author'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        yield "        </section>
    </main>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "main/index.html.twig";
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
        return array (  220 => 48,  209 => 46,  205 => 45,  199 => 41,  192 => 39,  186 => 36,  183 => 35,  181 => 34,  176 => 32,  169 => 31,  160 => 29,  156 => 28,  149 => 26,  146 => 25,  142 => 24,  130 => 16,  123 => 12,  114 => 10,  110 => 9,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block body %}
    <header class=\"hero\">
        <img src=\"{{ asset('uploads/articles/') ~ lastPost.featuredImage }}\" alt=\"{{ lastPost.title }}\">
        <div class=\"hero-content\">
            {% for category in lastPost.categories %}
                <span class=\"badge badge-primary badge-lg\">{{ category.name }}</span>
            {% endfor %}
            <h2><a href=\"{{ path('app_posts_details', {slug: lastPost.slug}) }}\">{{ lastPost.title }}</a></h2>
            {# <div class=\"post-content\">
                 {{ lastPost.content }}
            </div>#}
            <p>{{ lastPost.users.nickname }}</p>
        </div>
    </header>
    <div class=\"clear\"></div>
    <main class=\"container\">
        <section>
            <h2 class=\"text-center mt-3 mb-5\">Derniers Articles</h2>
            <div class=\"grid\">
                {% for post in posts %}
                    <article class=\"card\">
                        <img src=\"{{ asset('uploads/articles/mini/300x300-') ~ post.featuredImage }}\" alt=\"{{ post.title }}\">
                        <div class=\"card-body\">
                            {% for category in post.categories %}
                                <span class=\"badge badge-primary\">{{ category.name }}</span>
                            {% endfor %}
                            <h3><a href=\"{{ path('app_posts_details', {slug: post.slug}) }}\">{{ post.title }}</a></h3>
                            <p>{{ post.users.nickname }}</p>
                        </div>
                        {% if is_granted('POST_EDIT', post) %}
                            <div class=\"card-footer\">
                                <a href=\"{{ path('app_profile_posts_edit', {id: post.id}) }}\">Modifier</a>
                            </div>
                        {% endif %}
                    </article>
                {% endfor %}
            </div>
        </section>
        <section>
            <h2 class=\"text-center mt-3 mb-5\">Auteurs actifs</h2>
            {% for author in authors %}
                <h3>{{ author[0].nickname }} {{ author.total }}</h3>
            {% endfor %}
        </section>
    </main>

{% endblock %}
", "main/index.html.twig", "/var/www/templates/main/index.html.twig");
    }
}
