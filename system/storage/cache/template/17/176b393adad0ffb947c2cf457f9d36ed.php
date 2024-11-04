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

/* catalog/view/template/information/contact.twig */
class __TwigTemplate_8e84a4b55e0b68b2851e82f8cfd85058 extends Template
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
<div id=\"information-contact\" class=\"container\">
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
      <h3>";
        // line 11
        echo ($context["text_location"] ?? null);
        echo "</h3>
      <div class=\"card\">
        <div class=\"card-body\">
          <div class=\"row\">
            ";
        // line 15
        if (($context["image"] ?? null)) {
            // line 16
            echo "              <div class=\"col-sm-3\"><img src=\"";
            echo ($context["image"] ?? null);
            echo "\" alt=\"";
            echo ($context["store"] ?? null);
            echo "\" title=\"";
            echo ($context["store"] ?? null);
            echo "\" class=\"img-thumbnail\"/></div>
            ";
        }
        // line 18
        echo "            <div class=\"col-sm-3\"><strong>";
        echo ($context["store"] ?? null);
        echo "</strong>
              <br/>
              <address>
                ";
        // line 21
        echo ($context["address"] ?? null);
        echo "
              </address>
              ";
        // line 23
        if (($context["geocode"] ?? null)) {
            // line 24
            echo "                <a href=\"https://maps.google.com/maps?q=";
            echo twig_urlencode_filter(($context["geocode"] ?? null));
            echo "&hl=";
            echo ($context["geocode_hl"] ?? null);
            echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa-solid fa-location-dot\"></i> ";
            echo ($context["button_map"] ?? null);
            echo "</a>
              ";
        }
        // line 26
        echo "            </div>
            <div class=\"col-sm-3\"><strong>";
        // line 27
        echo ($context["text_telephone"] ?? null);
        echo "</strong>
              <br/>
              ";
        // line 29
        echo ($context["telephone"] ?? null);
        echo "
              <br/>
              <br/>
            </div>
            <div class=\"col-sm-3\">
              ";
        // line 34
        if (($context["open"] ?? null)) {
            // line 35
            echo "                <strong>";
            echo ($context["text_open"] ?? null);
            echo "</strong>
                <br/>
                ";
            // line 37
            echo ($context["open"] ?? null);
            echo "
                <br/>
                <br/>
              ";
        }
        // line 41
        echo "              ";
        if (($context["comment"] ?? null)) {
            // line 42
            echo "                <strong>";
            echo ($context["text_comment"] ?? null);
            echo "</strong>
                <br/>
                ";
            // line 44
            echo ($context["comment"] ?? null);
            echo "
              ";
        }
        // line 46
        echo "            </div>
          </div>
        </div>
      </div>
      ";
        // line 50
        if (($context["locations"] ?? null)) {
            // line 51
            echo "        <h3>";
            echo ($context["text_store"] ?? null);
            echo "</h3>
        <div id=\"accordion\" class=\"card-group\">
          ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 54
                echo "            <div class=\"card\">
              <div class=\"card-header\">
                <h4 class=\"card-title pt-2\"><a href=\"#collapse-location-";
                // line 56
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 56);
                echo "\" class=\"accordion-toggle\" data-bs-toggle=\"collapse\" data-bs-parent=\"#accordion\">";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 56);
                echo " <i class=\"fa-solid fa-caret-down\"></i></a></h4>
              </div>
              <div class=\"card-collapse collapse\" id=\"collapse-location-";
                // line 58
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 58);
                echo "\">
                <div class=\"card-body\">
                  <div class=\"row\">
                    ";
                // line 61
                if (twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 61)) {
                    // line 62
                    echo "                      <div class=\"col-sm-3\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 62);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 62);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 62);
                    echo "\" class=\"img-thumbnail\"/></div>
                    ";
                }
                // line 64
                echo "                    <div class=\"col-sm-3\"><strong>";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 64);
                echo "</strong>
                      <br/>
                      <address>
                        ";
                // line 67
                echo twig_get_attribute($this->env, $this->source, $context["location"], "address", [], "any", false, false, false, 67);
                echo "
                      </address>
                      ";
                // line 69
                if (twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 69)) {
                    // line 70
                    echo "                        <a href=\"https://maps.google.com/maps?q=";
                    echo twig_urlencode_filter(twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 70));
                    echo "&hl=";
                    echo ($context["geocode_hl"] ?? null);
                    echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa-solid fa-location-dot\"></i> ";
                    echo ($context["button_map"] ?? null);
                    echo "</a>
                      ";
                }
                // line 72
                echo "                    </div>
                    <div class=\"col-sm-3\"><strong>";
                // line 73
                echo ($context["text_telephone"] ?? null);
                echo "</strong>
                      <br/>
                      ";
                // line 75
                echo twig_get_attribute($this->env, $this->source, $context["location"], "telephone", [], "any", false, false, false, 75);
                echo "
                      <br/>
                      <br/>
                    </div>
                    <div class=\"col-sm-3\">
                      ";
                // line 80
                if (twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 80)) {
                    // line 81
                    echo "                        <strong>";
                    echo ($context["text_open"] ?? null);
                    echo "</strong>
                        <br/>
                        ";
                    // line 83
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 83);
                    echo "
                        <br/>
                        <br/>
                      ";
                }
                // line 87
                echo "                      ";
                if (twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 87)) {
                    // line 88
                    echo "                        <strong>";
                    echo ($context["text_comment"] ?? null);
                    echo "</strong>
                        <br/>
                        ";
                    // line 90
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 90);
                    echo "
                      ";
                }
                // line 92
                echo "                    </div>
                  </div>
                </div>
              </div>
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "        </div>
      ";
        }
        // line 100
        echo "      <form id=\"form-contact\" action=\"";
        echo ($context["send"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">
        <fieldset>
          <legend>";
        // line 102
        echo ($context["text_contact"] ?? null);
        echo "</legend>
          <div class=\"row mb-3 required\">
            <label for=\"input-name\" class=\"col-sm-2 col-form-label\">";
        // line 104
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 106
        echo ($context["name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\"/>
              <div id=\"error-name\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-email\" class=\"col-sm-2 col-form-label\">";
        // line 111
        echo ($context["entry_email"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"email\" value=\"";
        // line 113
        echo ($context["email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
              <div id=\"error-email\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-enquiry\" class=\"col-sm-2 col-form-label\">";
        // line 118
        echo ($context["entry_enquiry"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"enquiry\" rows=\"10\" id=\"input-enquiry\" class=\"form-control\"></textarea>
              <div id=\"error-enquiry\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          ";
        // line 124
        echo ($context["captcha"] ?? null);
        echo "
        </fieldset>
        <div class=\"text-end\">
          <button type=\"submit\" class=\"btn btn-primary\">";
        // line 127
        echo ($context["button_submit"] ?? null);
        echo "</button>
        </div>
      </form>
      ";
        // line 130
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 131
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 133
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/information/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  359 => 133,  354 => 131,  350 => 130,  344 => 127,  338 => 124,  329 => 118,  321 => 113,  316 => 111,  308 => 106,  303 => 104,  298 => 102,  292 => 100,  288 => 98,  277 => 92,  272 => 90,  266 => 88,  263 => 87,  256 => 83,  250 => 81,  248 => 80,  240 => 75,  235 => 73,  232 => 72,  222 => 70,  220 => 69,  215 => 67,  208 => 64,  198 => 62,  196 => 61,  190 => 58,  183 => 56,  179 => 54,  175 => 53,  169 => 51,  167 => 50,  161 => 46,  156 => 44,  150 => 42,  147 => 41,  140 => 37,  134 => 35,  132 => 34,  124 => 29,  119 => 27,  116 => 26,  106 => 24,  104 => 23,  99 => 21,  92 => 18,  82 => 16,  80 => 15,  73 => 11,  69 => 10,  65 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/information/contact.twig", "/Applications/XAMPP/xamppfiles/htdocs/opencart/upload/catalog/view/template/information/contact.twig");
    }
}
