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

/* catalog/view/template/checkout/checkout.twig */
class __TwigTemplate_e4a78285e21ee1095db39d028fc11b47 extends Template
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
<div id=\"checkout-checkout\" class=\"container\">
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
      <div class=\"row\">
        ";
        // line 12
        if (((($context["register"] ?? null) || ($context["payment_address"] ?? null)) || ($context["shipping_address"] ?? null))) {
            // line 13
            echo "          <div class=\"col-md-7 mb-3\">
            ";
            // line 14
            if (($context["register"] ?? null)) {
                // line 15
                echo "              <div id=\"checkout-register\">";
                echo ($context["register"] ?? null);
                echo "</div>
            ";
            }
            // line 17
            echo "            ";
            if (($context["payment_address"] ?? null)) {
                // line 18
                echo "              <div id=\"checkout-payment-address\">";
                echo ($context["payment_address"] ?? null);
                echo "</div>
            ";
            }
            // line 20
            echo "            ";
            if (($context["shipping_address"] ?? null)) {
                // line 21
                echo "              <div id=\"checkout-shipping-address\">";
                echo ($context["shipping_address"] ?? null);
                echo "</div>
            ";
            }
            // line 23
            echo "          </div>
        ";
        }
        // line 25
        echo "        <div class=\"col\">
          ";
        // line 26
        if (($context["shipping_method"] ?? null)) {
            // line 27
            echo "            <div id=\"checkout-shipping-method\" class=\"mb-3\">";
            echo ($context["shipping_method"] ?? null);
            echo "</div>
          ";
        }
        // line 29
        echo "          <div id=\"checkout-payment-method\" class=\"mb-4\">";
        echo ($context["payment_method"] ?? null);
        echo "</div>
          <div id=\"checkout-confirm\">";
        // line 30
        echo ($context["confirm"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
    ";
        // line 34
        echo ($context["content_bottom"] ?? null);
        echo "
  </div>
  ";
        // line 36
        echo ($context["column_right"] ?? null);
        echo "
</div>
";
        // line 38
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/checkout/checkout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 38,  137 => 36,  132 => 34,  125 => 30,  120 => 29,  114 => 27,  112 => 26,  109 => 25,  105 => 23,  99 => 21,  96 => 20,  90 => 18,  87 => 17,  81 => 15,  79 => 14,  76 => 13,  74 => 12,  69 => 10,  65 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/checkout/checkout.twig", "/Applications/XAMPP/xamppfiles/htdocs/opencart/upload/catalog/view/template/checkout/checkout.twig");
    }
}
