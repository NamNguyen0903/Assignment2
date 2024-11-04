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

/* catalog/view/template/account/order_list.twig */
class __TwigTemplate_bcba85991e12e7dc33c31180fce7dd12 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo "
<div id=\"account-order\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "      <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"col\">";
        // line 9
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 10
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      ";
        // line 11
        if (($context["orders"] ?? null)) {
            // line 12
            echo "        <div class=\"table-responsive\">
          <table class=\"table table-bordered table-hover\">
            <thead>
              <tr>
                <td class=\"text-end\">";
            // line 16
            echo ($context["column_order_id"] ?? null);
            echo "</td>
                <td class=\"text-start\">";
            // line 17
            echo ($context["column_customer"] ?? null);
            echo "</td>
                <td class=\"text-end\">";
            // line 18
            echo ($context["column_product"] ?? null);
            echo "</td>
                <td class=\"text-start\">";
            // line 19
            echo ($context["column_status"] ?? null);
            echo "</td>
                <td class=\"text-end\">";
            // line 20
            echo ($context["column_total"] ?? null);
            echo "</td>
                <td class=\"text-start\">";
            // line 21
            echo ($context["column_date_added"] ?? null);
            echo "</td>
                <td></td>
              </tr>
            </thead>
            <tbody>
              ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 27
                echo "                <tr>
                  <td class=\"text-end\">#";
                // line 28
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 28);
                echo "</td>
                  <td class=\"text-start\">";
                // line 29
                echo twig_get_attribute($this->env, $this->source, $context["order"], "name", [], "any", false, false, false, 29);
                echo "</td>
                  <td class=\"text-end\">";
                // line 30
                echo twig_get_attribute($this->env, $this->source, $context["order"], "products", [], "any", false, false, false, 30);
                echo "</td>
                  <td class=\"text-start\">";
                // line 31
                echo twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 31);
                echo "</td>
                  <td class=\"text-end\">";
                // line 32
                echo twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 32);
                echo "</td>
                  <td class=\"text-start\">";
                // line 33
                echo twig_get_attribute($this->env, $this->source, $context["order"], "date_added", [], "any", false, false, false, 33);
                echo "</td>
                  <td class=\"text-end\"><a href=\"";
                // line 34
                echo twig_get_attribute($this->env, $this->source, $context["order"], "view", [], "any", false, false, false, 34);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_view"] ?? null);
                echo "\" class=\"btn btn-info\"><i class=\"fa-solid fa-eye\"></i></a></td>
                </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "            </tbody>
          </table>
        </div>
        <div class=\"row mb-3\">
          <div class=\"col-sm-6 text-start\">";
            // line 41
            echo ($context["pagination"] ?? null);
            echo "</div>
          <div class=\"col-sm-6 text-end\">";
            // line 42
            echo ($context["results"] ?? null);
            echo "</div>
        </div>
      ";
        } else {
            // line 45
            echo "        <p>";
            echo ($context["text_no_results"] ?? null);
            echo "</p>
      ";
        }
        // line 47
        echo "      <div class=\"text-end\"><a href=\"";
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      ";
        // line 48
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 49
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 51
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/account/order_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 51,  184 => 49,  180 => 48,  173 => 47,  167 => 45,  161 => 42,  157 => 41,  151 => 37,  140 => 34,  136 => 33,  132 => 32,  128 => 31,  124 => 30,  120 => 29,  116 => 28,  113 => 27,  109 => 26,  101 => 21,  97 => 20,  93 => 19,  89 => 18,  85 => 17,  81 => 16,  75 => 12,  73 => 11,  69 => 10,  65 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/account/order_list.twig", "/Applications/XAMPP/xamppfiles/htdocs/opencart/upload/catalog/view/template/account/order_list.twig");
    }
}
