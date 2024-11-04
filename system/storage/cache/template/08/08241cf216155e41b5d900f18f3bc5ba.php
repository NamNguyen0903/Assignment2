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

/* admin/view/template/marketing/coupon_list.twig */
class __TwigTemplate_edf8522e29660a1597f1d8b2bae643a8 extends Template
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
        echo "<form id=\"form-coupon\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        echo ($context["action"] ?? null);
        echo "\" data-oc-target=\"#coupon\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <td class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></td>
          <td class=\"text-start\"><a href=\"";
        // line 7
        echo ($context["sort_name"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "name")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_name"] ?? null);
        echo "</a></td>
          <td class=\"text-start\"><a href=\"";
        // line 8
        echo ($context["sort_code"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "code")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_code"] ?? null);
        echo "</a></td>
          <td class=\"text-end\"><a href=\"";
        // line 9
        echo ($context["sort_discount"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "discount")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_discount"] ?? null);
        echo "</a></td>
          <td class=\"text-start d-none d-lg-table-cell\"><a href=\"";
        // line 10
        echo ($context["sort_date_start"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "date_start")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_date_start"] ?? null);
        echo "</a></td>
          <td class=\"text-start d-none d-lg-table-cell\"><a href=\"";
        // line 11
        echo ($context["sort_date_end"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "date_end")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_date_end"] ?? null);
        echo "</a></td>
          <td class=\"text-end\">";
        // line 12
        echo ($context["column_action"] ?? null);
        echo "</td>
        </tr>
      </thead>
      <tbody>
        ";
        // line 16
        if (($context["coupons"] ?? null)) {
            // line 17
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["coupons"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["coupon"]) {
                // line 18
                echo "            <tr>
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 19
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "coupon_id", [], "any", false, false, false, 19);
                echo "\" class=\"form-check-input\"/></td>
              <td class=\"text-start\">";
                // line 20
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "name", [], "any", false, false, false, 20);
                echo "
                <br/>
                ";
                // line 22
                if (twig_get_attribute($this->env, $this->source, $context["coupon"], "status", [], "any", false, false, false, 22)) {
                    // line 23
                    echo "                  <small class=\"text-success\">";
                    echo ($context["text_enabled"] ?? null);
                    echo "</small>
                ";
                } else {
                    // line 25
                    echo "                  <small class=\"text-danger\">";
                    echo ($context["text_disabled"] ?? null);
                    echo "</small>
                ";
                }
                // line 27
                echo "              </td>
              <td class=\"text-start\">";
                // line 28
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "code", [], "any", false, false, false, 28);
                echo "</td>
              <td class=\"text-end\">";
                // line 29
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "discount", [], "any", false, false, false, 29);
                echo "</td>
              <td class=\"text-start d-none d-lg-table-cell\">";
                // line 30
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "date_start", [], "any", false, false, false, 30);
                echo "</td>
              <td class=\"text-start d-none d-lg-table-cell\">";
                // line 31
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "date_end", [], "any", false, false, false, 31);
                echo "</td>
              <td class=\"text-start\">";
                // line 32
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "status", [], "any", false, false, false, 32);
                echo "</td>
              <td class=\"text-end\"><a href=\"";
                // line 33
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "edit", [], "any", false, false, false, 33);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a></td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "        ";
        } else {
            // line 37
            echo "          <tr>
            <td class=\"text-center\" colspan=\"8\">";
            // line 38
            echo ($context["text_no_results"] ?? null);
            echo "</td>
          </tr>
        ";
        }
        // line 41
        echo "      </tbody>
    </table>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6 text-start\">";
        // line 45
        echo ($context["pagination"] ?? null);
        echo "</div>
    <div class=\"col-sm-6 text-end\">";
        // line 46
        echo ($context["results"] ?? null);
        echo "</div>
  </div>
</form>";
    }

    public function getTemplateName()
    {
        return "admin/view/template/marketing/coupon_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 46,  199 => 45,  193 => 41,  187 => 38,  184 => 37,  181 => 36,  170 => 33,  166 => 32,  162 => 31,  158 => 30,  154 => 29,  150 => 28,  147 => 27,  141 => 25,  135 => 23,  133 => 22,  128 => 20,  124 => 19,  121 => 18,  116 => 17,  114 => 16,  107 => 12,  95 => 11,  83 => 10,  71 => 9,  59 => 8,  47 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/marketing/coupon_list.twig", "/Applications/XAMPP/xamppfiles/htdocs/opencart/upload/admin/view/template/marketing/coupon_list.twig");
    }
}
