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

/* admin/view/template/marketing/affiliate_list.twig */
class __TwigTemplate_928264ba7329f8d0db65b7d8c93d7f6d extends Template
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
        echo "<form id=\"form-affiliate\" method=\"post\" data-oc-load=\"";
        echo ($context["action"] ?? null);
        echo "\" data-oc-target=\"#affiliate\">
\t<div class=\"table-responsive\">
\t\t<table class=\"table table-bordered table-hover\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></td>
\t\t\t\t\t<td class=\"text-start\"><a href=\"";
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
\t\t\t\t\t<td class=\"text-start d-none d-lg-table-cell\"><a href=\"";
        // line 8
        echo ($context["sort_tracking"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "ca.tracking")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_tracking"] ?? null);
        echo "</a></td>
\t\t\t\t\t<td class=\"text-end\"><a href=\"";
        // line 9
        echo ($context["sort_commission"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "ca.commission")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_commission"] ?? null);
        echo "</a></td>
\t\t\t\t\t<td class=\"text-end d-none d-lg-table-cell\">";
        // line 10
        echo ($context["column_balance"] ?? null);
        echo "</td>
\t\t\t\t\t<td class=\"text-start d-none d-lg-table-cell\"><a href=\"";
        // line 11
        echo ($context["sort_date_added"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "ca.date_added")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_date_added"] ?? null);
        echo "</a></td>
\t\t\t\t\t<td class=\"text-end\">";
        // line 12
        echo ($context["column_action"] ?? null);
        echo "</td>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 16
        if (($context["affiliates"] ?? null)) {
            // line 17
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["affiliates"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["affiliate"]) {
                // line 18
                echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 19
                echo twig_get_attribute($this->env, $this->source, $context["affiliate"], "customer_id", [], "any", false, false, false, 19);
                echo "\" class=\"form-check-input\"/></td>
\t\t\t\t\t\t\t<td class=\"text-start\"><a href=\"";
                // line 20
                echo twig_get_attribute($this->env, $this->source, $context["affiliate"], "customer", [], "any", false, false, false, 20);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["affiliate"], "name", [], "any", false, false, false, 20);
                echo "</a>
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t";
                // line 22
                if (twig_get_attribute($this->env, $this->source, $context["affiliate"], "status", [], "any", false, false, false, 22)) {
                    // line 23
                    echo "\t\t\t\t\t\t\t\t\t\t<small class=\"text-success\">";
                    echo ($context["text_enabled"] ?? null);
                    echo "</small>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 25
                    echo "\t\t\t\t\t\t\t\t\t\t<small class=\"text-danger\">";
                    echo ($context["text_disabled"] ?? null);
                    echo "</small>
\t\t\t\t\t\t\t\t\t";
                }
                // line 27
                echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"text-start d-none d-lg-table-cell\">";
                // line 28
                echo twig_get_attribute($this->env, $this->source, $context["affiliate"], "tracking", [], "any", false, false, false, 28);
                echo "</td>
\t\t\t\t\t\t\t<td class=\"text-end\">";
                // line 29
                echo twig_get_attribute($this->env, $this->source, $context["affiliate"], "commission", [], "any", false, false, false, 29);
                echo "</td>
\t\t\t\t\t\t\t<td class=\"text-end d-none d-lg-table-cell\">";
                // line 30
                echo twig_get_attribute($this->env, $this->source, $context["affiliate"], "balance", [], "any", false, false, false, 30);
                echo "</td>
\t\t\t\t\t\t\t<td class=\"text-start d-none d-lg-table-cell\">";
                // line 31
                echo twig_get_attribute($this->env, $this->source, $context["affiliate"], "date_added", [], "any", false, false, false, 31);
                echo "</td>
\t\t\t\t\t\t\t<td class=\"text-end\"><a href=\"";
                // line 32
                echo twig_get_attribute($this->env, $this->source, $context["affiliate"], "edit", [], "any", false, false, false, 32);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['affiliate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "\t\t\t\t";
        } else {
            // line 36
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"text-center\" colspan=\"8\">";
            // line 37
            echo ($context["text_no_results"] ?? null);
            echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        // line 40
        echo "\t\t\t</tbody>
\t\t</table>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-sm-6 text-start\">";
        // line 44
        echo ($context["pagination"] ?? null);
        echo "</div>
\t\t<div class=\"col-sm-6 text-end\">";
        // line 45
        echo ($context["results"] ?? null);
        echo "</div>
\t</div>
</form>";
    }

    public function getTemplateName()
    {
        return "admin/view/template/marketing/affiliate_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 45,  189 => 44,  183 => 40,  177 => 37,  174 => 36,  171 => 35,  160 => 32,  156 => 31,  152 => 30,  148 => 29,  144 => 28,  141 => 27,  135 => 25,  129 => 23,  127 => 22,  120 => 20,  116 => 19,  113 => 18,  108 => 17,  106 => 16,  99 => 12,  87 => 11,  83 => 10,  71 => 9,  59 => 8,  47 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/marketing/affiliate_list.twig", "/Applications/XAMPP/xamppfiles/htdocs/opencart/upload/admin/view/template/marketing/affiliate_list.twig");
    }
}
