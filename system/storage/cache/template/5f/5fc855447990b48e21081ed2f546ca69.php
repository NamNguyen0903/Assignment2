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

/* catalog/view/template/account/transaction.twig */
class __TwigTemplate_0e73b8cf06884f4da4286bffc96e8794 extends Template
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
<div id=\"account-transaction\" class=\"container\">
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
      <p>";
        // line 11
        echo ($context["text_total"] ?? null);
        echo " <b>";
        echo ($context["total"] ?? null);
        echo "</b>.</p>
      <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <td class=\"text-start\">";
        // line 15
        echo ($context["column_date_added"] ?? null);
        echo "</td>
            <td class=\"text-start\">";
        // line 16
        echo ($context["column_description"] ?? null);
        echo "</td>
            <td class=\"text-end\">";
        // line 17
        echo ($context["column_amount"] ?? null);
        echo "</td>
          </tr>
        </thead>
        <tbody>
          ";
        // line 21
        if (($context["transactions"] ?? null)) {
            // line 22
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["transactions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["transaction"]) {
                // line 23
                echo "              <tr>
                <td class=\"text-start\">";
                // line 24
                echo twig_get_attribute($this->env, $this->source, $context["transaction"], "date_added", [], "any", false, false, false, 24);
                echo "</td>
                <td class=\"text-start\">";
                // line 25
                echo twig_get_attribute($this->env, $this->source, $context["transaction"], "description", [], "any", false, false, false, 25);
                echo "</td>
                <td class=\"text-end\">";
                // line 26
                echo twig_get_attribute($this->env, $this->source, $context["transaction"], "amount", [], "any", false, false, false, 26);
                echo "</td>
              </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transaction'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "          ";
        } else {
            // line 30
            echo "            <tr>
              <td class=\"text-center\" colspan=\"5\">";
            // line 31
            echo ($context["text_no_results"] ?? null);
            echo "</td>
            </tr>
          ";
        }
        // line 34
        echo "        </tbody>
      </table>
      <div class=\"row mb-3\">
        <div class=\"col-sm-6 text-start\">";
        // line 37
        echo ($context["pagination"] ?? null);
        echo "</div>
        <div class=\"col-sm-6 text-end\">";
        // line 38
        echo ($context["results"] ?? null);
        echo "</div>
      </div>
      <div class=\"text-end\"><a href=\"";
        // line 40
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      ";
        // line 41
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 42
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 44
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/account/transaction.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 44,  160 => 42,  156 => 41,  150 => 40,  145 => 38,  141 => 37,  136 => 34,  130 => 31,  127 => 30,  124 => 29,  115 => 26,  111 => 25,  107 => 24,  104 => 23,  99 => 22,  97 => 21,  90 => 17,  86 => 16,  82 => 15,  73 => 11,  69 => 10,  65 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/account/transaction.twig", "/Applications/XAMPP/xamppfiles/htdocs/opencart/upload/catalog/view/template/account/transaction.twig");
    }
}
