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

/* catalog/view/template/checkout/cart_list.twig */
class __TwigTemplate_46ed25fe34a936faf72d80fd5b63a14b extends Template
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
  <table class=\"table table-bordered\">
    <thead>
      <tr>
        <td class=\"text-center\">";
        // line 5
        echo ($context["column_image"] ?? null);
        echo "</td>
        <td class=\"text-start\">";
        // line 6
        echo ($context["column_name"] ?? null);
        echo "</td>
        <td class=\"text-start\">";
        // line 7
        echo ($context["column_model"] ?? null);
        echo "</td>
        <td class=\"text-start\">";
        // line 8
        echo ($context["column_quantity"] ?? null);
        echo "</td>
        <td class=\"text-end\">";
        // line 9
        echo ($context["column_price"] ?? null);
        echo "</td>
        <td class=\"text-end\">";
        // line 10
        echo ($context["column_total"] ?? null);
        echo "</td>
      </tr>
    </thead>
    <tbody>
      ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 15
            echo "        <tr>
          <td class=\"text-center\">";
            // line 16
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 16)) {
                echo " <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 16);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 16);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 16);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 16);
                echo "\" class=\"img-thumbnail\"/></a> ";
            }
            echo "</td>
          <td class=\"text-start text-wrap\"><a href=\"";
            // line 17
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 17);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 17);
            echo "</a>";
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 17)) {
                echo " <span class=\"text-danger\">***</span>";
            }
            // line 18
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 18));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 19
                echo "              <br/>
              <small> - ";
                // line 20
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 20);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 20);
                echo "</small>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 22)) {
                // line 23
                echo "              <br/>
              <small> - ";
                // line 24
                echo ($context["text_points"] ?? null);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 24);
                echo "</small>
            ";
            }
            // line 26
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 26)) {
                // line 27
                echo "              <br/>
              <small> - ";
                // line 28
                echo ($context["text_subscription"] ?? null);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 28);
                echo "</small>
            ";
            }
            // line 30
            echo "          </td>
          <td class=\"text-start\">";
            // line 31
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 31);
            echo "</td>
          <td class=\"text-start\">
            <form method=\"post\" data-oc-target=\"#shopping-cart\">
              <div class=\"input-group\">
                <input type=\"text\" name=\"quantity\" value=\"";
            // line 35
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 35);
            echo "\" size=\"1\" class=\"form-control\"> <input type=\"hidden\" name=\"key\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 35);
            echo "\">
                <button type=\"submit\" formaction=\"";
            // line 36
            echo ($context["product_edit"] ?? null);
            echo "\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_update"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-rotate\"></i></button>
                <button type=\"submit\" formaction=\"";
            // line 37
            echo ($context["product_remove"] ?? null);
            echo "\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></button>
              </div>
            </form>
          </td>
          <td class=\"text-end\">";
            // line 41
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 41);
            echo "</td>
          <td class=\"text-end\">";
            // line 42
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 42);
            echo "</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 46
            echo "        <tr>
          <td></td>
          <td class=\"text-start text-wrap\">";
            // line 48
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 48);
            echo "</td>
          <td class=\"text-start\"></td>
          <td class=\"text-start\">
            <form method=\"post\" data-oc-target=\"#shopping-cart\">
              <div class=\"input-group\">
                <input type=\"text\" name=\"quantity\" value=\"1\" size=\"1\" class=\"form-control\" disabled/>
                <button type=\"submit\" formaction=\"";
            // line 54
            echo ($context["voucher_remove"] ?? null);
            echo "\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></button>
              </div>
              <input type=\"hidden\" name=\"key\" value=\"";
            // line 56
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 56);
            echo "\"/>
            </form>
          </td>
          <td class=\"text-end\">";
            // line 59
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 59);
            echo "</td>
          <td class=\"text-end\">";
            // line 60
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 60);
            echo "</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "    </tbody>
    <tfoot id=\"checkout-total\">
      ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 66
            echo "        <tr>
          <td colspan=\"5\" class=\"text-end\"><strong>";
            // line 67
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 67);
            echo "</strong></td>
          <td class=\"text-end\">";
            // line 68
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 68);
            echo "</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "    </tfoot>
  </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/checkout/cart_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 71,  246 => 68,  242 => 67,  239 => 66,  235 => 65,  231 => 63,  222 => 60,  218 => 59,  212 => 56,  205 => 54,  196 => 48,  192 => 46,  187 => 45,  178 => 42,  174 => 41,  165 => 37,  159 => 36,  153 => 35,  146 => 31,  143 => 30,  136 => 28,  133 => 27,  130 => 26,  123 => 24,  120 => 23,  117 => 22,  107 => 20,  104 => 19,  99 => 18,  91 => 17,  77 => 16,  74 => 15,  70 => 14,  63 => 10,  59 => 9,  55 => 8,  51 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/checkout/cart_list.twig", "/Applications/XAMPP/xamppfiles/htdocs/opencart/upload/catalog/view/template/checkout/cart_list.twig");
    }
}
