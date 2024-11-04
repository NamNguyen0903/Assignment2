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

/* catalog/view/template/checkout/confirm.twig */
class __TwigTemplate_2ab63fe1bbaab3e65bb5bfdbea3facd2 extends Template
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
        echo "<div class=\"table-responsive\">
  <table class=\"table table-bordered table-hover\">
    <thead>
      <tr>
        <td class=\"text-start\">";
        // line 5
        echo ($context["column_name"] ?? null);
        echo "</td>
        <td class=\"text-end\">";
        // line 6
        echo ($context["column_total"] ?? null);
        echo "</td>
      </tr>
    </thead>
    <tbody>
      ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 11
            echo "        <tr>
          <td class=\"text-start\">";
            // line 12
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 12);
            echo "x <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 12);
            echo "</a>
            ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 13));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 14
                echo "              <br/>
              <small> - ";
                // line 15
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 15);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 15);
                echo "</small>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 17)) {
                // line 18
                echo "              <br/>
              <small> - ";
                // line 19
                echo ($context["text_points"] ?? null);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 19);
                echo "</small>
            ";
            }
            // line 21
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 21)) {
                // line 22
                echo "              <br/>
              <small> - ";
                // line 23
                echo ($context["text_subscription"] ?? null);
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 23);
                echo "</small>
            ";
            }
            // line 24
            echo "</td>
          <td class=\"text-end\">";
            // line 25
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 25);
            echo "</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 29
            echo "        <tr>
          <td class=\"text-start\">1x ";
            // line 30
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 30);
            echo "</td>
          <td class=\"text-end\">";
            // line 31
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 31);
            echo "</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "    </tbody>
    <tfoot>
      ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 37
            echo "        <tr>
          <td class=\"text-end\"><strong>";
            // line 38
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 38);
            echo "</strong></td>
          <td class=\"text-end\">";
            // line 39
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 39);
            echo "</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "    </tfoot>
  </table>
</div>
<div id=\"checkout-payment\">
  ";
        // line 46
        if (($context["payment"] ?? null)) {
            // line 47
            echo "    ";
            echo ($context["payment"] ?? null);
            echo "
  ";
        } else {
            // line 49
            echo "    <div class=\"text-end\"><button type=\"button\" class=\"btn btn-primary\" disabled>";
            echo ($context["button_confirm"] ?? null);
            echo "</button></div>
  ";
        }
        // line 51
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/checkout/confirm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 51,  183 => 49,  177 => 47,  175 => 46,  169 => 42,  160 => 39,  156 => 38,  153 => 37,  149 => 36,  145 => 34,  136 => 31,  132 => 30,  129 => 29,  124 => 28,  115 => 25,  112 => 24,  105 => 23,  102 => 22,  99 => 21,  92 => 19,  89 => 18,  86 => 17,  76 => 15,  73 => 14,  69 => 13,  61 => 12,  58 => 11,  54 => 10,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/checkout/confirm.twig", "/Applications/XAMPP/xamppfiles/htdocs/opencart/upload/catalog/view/template/checkout/confirm.twig");
    }
}
