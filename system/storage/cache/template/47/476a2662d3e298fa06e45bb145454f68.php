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

/* catalog/view/template/account/account.twig */
class __TwigTemplate_9692779bb87eebcbe080a9c2cb037dd2 extends Template
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
<div id=\"account-account\" class=\"container\">
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
  ";
        // line 8
        if (($context["success"] ?? null)) {
            // line 9
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
  ";
        }
        // line 11
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"col\">";
        // line 12
        echo ($context["content_top"] ?? null);
        echo "
      <h2>";
        // line 13
        echo ($context["text_my_account"] ?? null);
        echo "</h2>
      <ul class=\"list-unstyled\">
        <li><a href=\"";
        // line 15
        echo ($context["edit"] ?? null);
        echo "\">";
        echo ($context["text_edit"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 16
        echo ($context["password"] ?? null);
        echo "\">";
        echo ($context["text_password"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 17
        echo ($context["address"] ?? null);
        echo "\">";
        echo ($context["text_address"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 18
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
      </ul>
      <h2>
        ";
        // line 21
        echo ($context["text_my_orders"] ?? null);
        echo "
      </h2>
      <ul class=\"list-unstyled\">
        <li><a href=\"";
        // line 24
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 25
        echo ($context["subscription"] ?? null);
        echo "\">";
        echo ($context["text_subscription"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 26
        echo ($context["download"] ?? null);
        echo "\">";
        echo ($context["text_download"] ?? null);
        echo "</a></li>
        ";
        // line 27
        if (($context["reward"] ?? null)) {
            // line 28
            echo "          <li><a href=\"";
            echo ($context["reward"] ?? null);
            echo "\">";
            echo ($context["text_reward"] ?? null);
            echo "</a></li>
        ";
        }
        // line 30
        echo "        <li><a href=\"";
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 31
        echo ($context["transaction"] ?? null);
        echo "\">";
        echo ($context["text_transaction"] ?? null);
        echo "</a></li>
      </ul>
      ";
        // line 33
        if (($context["affiliate"] ?? null)) {
            // line 34
            echo "        <h2>
          ";
            // line 35
            echo ($context["text_my_affiliate"] ?? null);
            echo "
        </h2>
        <ul class=\"list-unstyled\">
          ";
            // line 38
            if ( !($context["tracking"] ?? null)) {
                // line 39
                echo "            <li><a href=\"";
                echo ($context["affiliate"] ?? null);
                echo "\">";
                echo ($context["text_affiliate_add"] ?? null);
                echo "</a></li>
          ";
            } else {
                // line 41
                echo "            <li><a href=\"";
                echo ($context["affiliate"] ?? null);
                echo "\">";
                echo ($context["text_affiliate_edit"] ?? null);
                echo "</a></li>
            <li><a href=\"";
                // line 42
                echo ($context["tracking"] ?? null);
                echo "\">";
                echo ($context["text_tracking"] ?? null);
                echo "</a></li>
          ";
            }
            // line 44
            echo "        </ul>
      ";
        }
        // line 46
        echo "      <h2>
        ";
        // line 47
        echo ($context["text_my_newsletter"] ?? null);
        echo "
      </h2>
      <ul class=\"list-unstyled\">
        <li><a href=\"";
        // line 50
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a></li>
      </ul>
      ";
        // line 52
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 53
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 55
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/account/account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 55,  216 => 53,  212 => 52,  205 => 50,  199 => 47,  196 => 46,  192 => 44,  185 => 42,  178 => 41,  170 => 39,  168 => 38,  162 => 35,  159 => 34,  157 => 33,  150 => 31,  143 => 30,  135 => 28,  133 => 27,  127 => 26,  121 => 25,  115 => 24,  109 => 21,  101 => 18,  95 => 17,  89 => 16,  83 => 15,  78 => 13,  74 => 12,  69 => 11,  63 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/account/account.twig", "/Applications/XAMPP/xamppfiles/htdocs/opencart/upload/catalog/view/template/account/account.twig");
    }
}
