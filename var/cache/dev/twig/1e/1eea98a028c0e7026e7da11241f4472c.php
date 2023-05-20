<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* cart/index.html.twig */
class __TwigTemplate_4882689e17f60e48bb49d2015ff5f4a4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Mon panier";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div class=\"container\">
    <h1>Mon panier</h1>
    Nombres de paniers pour chaque produit
    <hr>
    ";
        // line 10
        if ((twig_length_filter($this->env, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 10, $this->source); })())) > 0)) {
            // line 11
            echo "            <table class=\"table\">
                <thead>
                <tr>
                    <th>Produits</th>
                    <th></th>
                    <th>Quantité</th>
                    <th>Prix</th>
                    <th>Total</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                ";
            // line 23
            $context["total"] = 0;
            // line 24
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 24, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 25
                echo "                <tr>
                    <td>
                        <img src=\"/uploads/";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 27), "illustration", [], "any", false, false, false, 27), "html", null, true);
                echo "\" alt=\"product.product.name\" height=\"75px\">
                    </td>
                    <td>
                        ";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 30), "name", [], "any", false, false, false, 30), "html", null, true);
                echo " <br>
                        <small>";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 31), "description", [], "any", false, false, false, 31), "html", null, true);
                echo "</small>
                    </td>
                    <td>
                        <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("decrease_to_cart", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 34), "id", [], "any", false, false, false, 34)]), "html", null, true);
                echo "\" alt=\"Diminuer quantité de ce produit\">
                            <i class=\"fas fa-minus\"></i>
                        </a>
                        ";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 37), "html", null, true);
                echo "
                        <a href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_to_cart", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 38), "id", [], "any", false, false, false, 38)]), "html", null, true);
                echo "\" alt=\"Ajouter quantité de ce produit\">
                            <i class=\"fas fa-plus\"></i>
                        </a>
                    </td>
                    <td>";
                // line 42
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 42), "price", [], "any", false, false, false, 42) / 100), 0, ",", "."), "html", null, true);
                echo " MGA</td>
                    <td>";
                // line 43
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 43), "price", [], "any", false, false, false, 43) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 43)) / 100), 0, ",", "."), "html", null, true);
                echo " MGA</td>
                    <td><a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_to_cart", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44)]), "html", null, true);
                echo "\"><i class=\"far fa-trash-alt\"></i></a></td>
                </tr>
                    ";
                // line 46
                $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 46, $this->source); })()) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 46), "price", [], "any", false, false, false, 46) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 46)));
                // line 47
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                </tbody>
            </table>
            <div class=\"text-right mb-5\">
                <b>Nombre de produits : </b> ";
            // line 51
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 51, $this->source); })())), "html", null, true);
            echo " <br>
                <b>Total prix : </b> ";
            // line 52
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 52, $this->source); })()) / 100), 0, ",", "."), "html", null, true);
            echo " MGA <br>
                <a href=\"\" class=\"mt-3 btn btn-outline-success\"> Valider mon panier </a>
            </div>
        </div>
        ";
        } else {
            // line 57
            echo "            <p><b>Votre panier est vide</b></p>
    ";
        }
        // line 59
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "cart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 59,  192 => 57,  184 => 52,  180 => 51,  175 => 48,  169 => 47,  167 => 46,  162 => 44,  158 => 43,  154 => 42,  147 => 38,  143 => 37,  137 => 34,  131 => 31,  127 => 30,  121 => 27,  117 => 25,  112 => 24,  110 => 23,  96 => 11,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon panier{% endblock %}

{% block content %}
    <div class=\"container\">
    <h1>Mon panier</h1>
    Nombres de paniers pour chaque produit
    <hr>
    {% if cart|length > 0 %}
            <table class=\"table\">
                <thead>
                <tr>
                    <th>Produits</th>
                    <th></th>
                    <th>Quantité</th>
                    <th>Prix</th>
                    <th>Total</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                {% set total = 0 %}
                {% for product in cart %}
                <tr>
                    <td>
                        <img src=\"/uploads/{{ product.product.illustration }}\" alt=\"product.product.name\" height=\"75px\">
                    </td>
                    <td>
                        {{ product.product.name }} <br>
                        <small>{{ product.product.description }}</small>
                    </td>
                    <td>
                        <a href=\"{{ path('decrease_to_cart', {'id' : product.product.id}) }}\" alt=\"Diminuer quantité de ce produit\">
                            <i class=\"fas fa-minus\"></i>
                        </a>
                        {{ product.quantity }}
                        <a href=\"{{ path('add_to_cart', {'id' : product.product.id}) }}\" alt=\"Ajouter quantité de ce produit\">
                            <i class=\"fas fa-plus\"></i>
                        </a>
                    </td>
                    <td>{{ (product.product.price /100)|number_format(0 , ',', '.') }} MGA</td>
                    <td>{{ (product.product.price * product.quantity /100)|number_format(0 , ',', '.') }} MGA</td>
                    <td><a href=\"{{ path('delete_to_cart',{ 'id': product.product.id }) }}\"><i class=\"far fa-trash-alt\"></i></a></td>
                </tr>
                    {% set total = total + product.product.price * product.quantity %}
                {% endfor %}
                </tbody>
            </table>
            <div class=\"text-right mb-5\">
                <b>Nombre de produits : </b> {{ cart|length }} <br>
                <b>Total prix : </b> {{ (total /100)|number_format(0 , ',', '.') }} MGA <br>
                <a href=\"\" class=\"mt-3 btn btn-outline-success\"> Valider mon panier </a>
            </div>
        </div>
        {% else %}
            <p><b>Votre panier est vide</b></p>
    {% endif %}

{% endblock %}
", "cart/index.html.twig", "C:\\wamp64\\www\\projectS\\templates\\cart\\index.html.twig");
    }
}
