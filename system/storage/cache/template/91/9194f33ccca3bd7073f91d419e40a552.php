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

/* catalog/view/template/account/register.twig */
class __TwigTemplate_12cc1f1e080b4f15a5d6af4a59abf84e extends Template
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
<div id=\"account-register\" class=\"container\">
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
  <div class=\"row\">
    ";
        // line 9
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"col\">";
        // line 10
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 11
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <p>";
        // line 12
        echo ($context["text_account_already"] ?? null);
        echo "</p>
      <form id=\"form-register\" action=\"";
        // line 13
        echo ($context["register"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">
        <fieldset id=\"account\">
          <legend>";
        // line 15
        echo ($context["text_your_details"] ?? null);
        echo "</legend>
          ";
        // line 16
        if ((twig_length_filter($this->env, ($context["customer_groups"] ?? null)) > 1)) {
            // line 17
            echo "            <div class=\"row mb-3 required\">
              <label class=\"col-sm-2 col-form-label\">";
            // line 18
            echo ($context["entry_customer_group"] ?? null);
            echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-select\">
                  ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 22
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 22);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 22) == ($context["customer_group_id"] ?? null))) {
                    echo " selected";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 22);
                echo "</option>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "                </select>
              </div>
            </div>
          ";
        }
        // line 28
        echo "          <div class=\"row mb-3 required\">
            <label for=\"input-firstname\" class=\"col-sm-2 col-form-label\">";
        // line 29
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"firstname\" value=\"\" placeholder=\"";
        // line 31
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"form-control\"/>
              <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-lastname\" class=\"col-sm-2 col-form-label\">";
        // line 36
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"lastname\" value=\"\" placeholder=\"";
        // line 38
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname\" class=\"form-control\"/>
              <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-email\" class=\"col-sm-2 col-form-label\">";
        // line 43
        echo ($context["entry_email"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"email\" name=\"email\" value=\"\" placeholder=\"";
        // line 45
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
              <div id=\"error-email\" class=\"invalid-feedback\"></div>
            </div>
          </div>

          ";
        // line 50
        if (($context["config_telephone_display"] ?? null)) {
            // line 51
            echo "            <div class=\"row mb-3";
            if (($context["config_telephone_required"] ?? null)) {
                echo " required";
            }
            echo "\">
              <label for=\"input-telephone\" class=\"col-sm-2 col-form-label\">";
            // line 52
            echo ($context["entry_telephone"] ?? null);
            echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"tel\" name=\"telephone\" value=\"\" placeholder=\"";
            // line 54
            echo ($context["entry_telephone"] ?? null);
            echo "\" id=\"input-telephone\" class=\"form-control\"/>
                <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
              </div>
            </div>
          ";
        }
        // line 59
        echo "
          ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 61
            echo "
            ";
            // line 62
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 62) == "select")) {
                // line 63
                echo "              <div class=\"row mb-3 custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 63);
                echo "\">
                <label for=\"input-custom-field-";
                // line 64
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 64);
                echo "\" class=\"col-sm-2 col-form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 64);
                echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"custom_field[";
                // line 66
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 66);
                echo "]\" id=\"input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 66);
                echo "\" class=\"form-select\">
                    <option value=\"\">";
                // line 67
                echo ($context["text_select"] ?? null);
                echo "</option>
                    ";
                // line 68
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 68));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 69
                    echo "                      <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 69);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 69);
                    echo "</option>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                echo "                  </select>
                  <div id=\"error-custom-field-";
                // line 72
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 72);
                echo "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 76
            echo "
            ";
            // line 77
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 77) == "radio")) {
                // line 78
                echo "              <div class=\"row mb-3 custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 78);
                echo "\">
                <label class=\"col-sm-2 col-form-label\">";
                // line 79
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 79);
                echo "</label>
                <div class=\"col-sm-10\">
                  <div id=\"input-custom-field-";
                // line 81
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 81);
                echo "\">
                    ";
                // line 82
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 82));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 83
                    echo "                      <div class=\"form-check\">
                        <input type=\"radio\" name=\"custom_field[";
                    // line 84
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 84);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 84);
                    echo "\" id=\"input-custom-value-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 84);
                    echo "\" class=\"form-check-input\"/> <label for=\"input-custom-value-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 84);
                    echo "\" class=\"form-check-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 84);
                    echo "</label>
                      </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 87
                echo "                  </div>
                  <div id=\"error-custom-field-";
                // line 88
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 88);
                echo "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 92
            echo "
            ";
            // line 93
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 93) == "checkbox")) {
                // line 94
                echo "              <div class=\"row mb-3 custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 94);
                echo "\">
                <label class=\"col-sm-2 col-form-label\">";
                // line 95
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 95);
                echo "</label>
                <div class=\"col-sm-10\">
                  <div id=\"input-custom-field-";
                // line 97
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 97);
                echo "\">
                    ";
                // line 98
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 98));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 99
                    echo "                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"custom_field[";
                    // line 100
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 100);
                    echo "][]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 100);
                    echo "\" id=\"input-custom-value-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 100);
                    echo "\" class=\"form-check-input\"/> <label for=\"input-custom-value-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 100);
                    echo "\" class=\"form-check-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 100);
                    echo "</label>
                      </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 103
                echo "                  </div>
                  <div id=\"error-custom-field-";
                // line 104
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 104);
                echo "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 108
            echo "
            ";
            // line 109
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 109) == "text")) {
                // line 110
                echo "              <div class=\"row mb-3 custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 110);
                echo "\">
                <label for=\"input-custom-field-";
                // line 111
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 111);
                echo "\" class=\"col-sm-2 col-form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 111);
                echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"custom_field[";
                // line 113
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 113);
                echo "]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 113);
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 113);
                echo "\" id=\"input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 113);
                echo "\" class=\"form-control\"/>
                  <div id=\"error-custom-field-";
                // line 114
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 114);
                echo "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 118
            echo "
            ";
            // line 119
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 119) == "textarea")) {
                // line 120
                echo "              <div class=\"row mb-3 custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 120);
                echo "\">
                <label for=\"input-custom-field-";
                // line 121
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 121);
                echo "\" class=\"col-sm-2 col-form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 121);
                echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"custom_field[";
                // line 123
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 123);
                echo "]\" rows=\"5\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 123);
                echo "\" id=\"input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 123);
                echo "\" class=\"form-control\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 123);
                echo "</textarea>
                  <div id=\"error-custom-field-";
                // line 124
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 124);
                echo "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 128
            echo "
            ";
            // line 129
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 129) == "file")) {
                // line 130
                echo "              <div class=\"row mb-3 custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 130);
                echo "\">
                <label class=\"col-sm-2 col-form-label\">";
                // line 131
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 131);
                echo "</label>
                <div class=\"col-sm-10\">
                  <div>
                    <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                // line 134
                echo ($context["upload"] ?? null);
                echo "\" data-oc-size-max=\"";
                echo ($context["config_file_max_size"] ?? null);
                echo "\" data-oc-size-error=\"";
                echo ($context["error_upload_size"] ?? null);
                echo "\" data-oc-target=\"#input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 134);
                echo "\" class=\"btn btn-light\"><i class=\"fa-solid fa-upload\"></i> ";
                echo ($context["button_upload"] ?? null);
                echo "</button>
                    <input type=\"hidden\" name=\"custom_field[";
                // line 135
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 135);
                echo "]\" value=\"\" id=\"input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 135);
                echo "\"/>
                  </div>
                  <div id=\"error-custom-field-";
                // line 137
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 137);
                echo "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 141
            echo "
            ";
            // line 142
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 142) == "date")) {
                // line 143
                echo "              <div class=\"row mb-3 custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 143);
                echo "\">
                <label for=\"input-custom-field-";
                // line 144
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 144);
                echo "\" class=\"col-sm-2 col-form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 144);
                echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"custom_field[";
                // line 147
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 147);
                echo "]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 147);
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 147);
                echo "\" id=\"input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 147);
                echo "\" class=\"form-control date\"/>
                    <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                  </div>
                  <div id=\"error-custom-field-";
                // line 150
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 150);
                echo "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 154
            echo "
            ";
            // line 155
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 155) == "time")) {
                // line 156
                echo "              <div class=\"row mb-3 custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 156);
                echo "\">
                <label for=\"input-custom-field-";
                // line 157
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 157);
                echo "\" class=\"col-sm-2 col-form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 157);
                echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"custom_field[";
                // line 160
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 160);
                echo "]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 160);
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 160);
                echo "\" id=\"input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 160);
                echo "\" class=\"form-control time\"/>
                    <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                  </div>
                  <div id=\"error-custom-field-";
                // line 163
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 163);
                echo "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 167
            echo "
            ";
            // line 168
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 168) == "datetime")) {
                // line 169
                echo "              <div class=\"row mb-3 custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 169);
                echo "\">
                <label for=\"input-custom-field-";
                // line 170
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 170);
                echo "\" class=\"col-sm-2 col-form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 170);
                echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"custom_field[";
                // line 173
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 173);
                echo "]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 173);
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 173);
                echo "\" id=\"input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 173);
                echo "\" class=\"form-control datetime\"/>
                    <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                  </div>
                  <div id=\"error-custom-field-";
                // line 176
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 176);
                echo "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 180
            echo "
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 182
        echo "        </fieldset>

        <fieldset>
          <legend>";
        // line 185
        echo ($context["text_your_password"] ?? null);
        echo "</legend>
          <div class=\"row mb-3 required\">
            <label for=\"input-password\" class=\"col-sm-2 col-form-label\">";
        // line 187
        echo ($context["entry_password"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" name=\"password\" value=\"\" placeholder=\"";
        // line 189
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\"/>
              <div id=\"error-password\" class=\"invalid-feedback\"></div>
            </div>
          </div>
        </fieldset>

        <fieldset>
          <legend>";
        // line 196
        echo ($context["text_newsletter"] ?? null);
        echo "</legend>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\">";
        // line 198
        echo ($context["entry_newsletter"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"form-check form-switch form-switch-lg\">
                <input type=\"hidden\" name=\"newsletter\" value=\"0\"/> <input type=\"checkbox\" name=\"newsletter\" value=\"1\" id=\"input-newsletter\" class=\"form-check-input\"/>
              </div>
            </div>
          </div>
        </fieldset>
        ";
        // line 206
        echo ($context["captcha"] ?? null);
        echo "
        <div class=\"text-end\">
          ";
        // line 208
        if (($context["text_agree"] ?? null)) {
            // line 209
            echo "            <div class=\"form-check form-switch form-switch-lg form-check-reverse form-check-inline\">
              <label class=\"form-check-label\">";
            // line 210
            echo ($context["text_agree"] ?? null);
            echo "</label> <input type=\"checkbox\" name=\"agree\" value=\"1\" class=\"form-check-input\"/>
            </div>
          ";
        }
        // line 213
        echo "          <button type=\"submit\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</button>
        </div>
      </form>
      ";
        // line 216
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 218
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-customer-group').on('change', function() {
    \$.ajax({
        url: 'index.php?route=account/custom_field&customer_group_id=' + this.value + '&language=";
        // line 224
        echo ($context["language"] ?? null);
        echo "',
        dataType: 'json',
        success: function(json) {
            \$('.custom-field').hide();
            \$('.custom-field').removeClass('required');

            for (i = 0; i < json.length; i++) {
                custom_field = json[i];

                \$('.custom-field-' + custom_field['custom_field_id']).show();

                if (custom_field['required']) {
                    \$('.custom-field-' + custom_field['custom_field_id']).addClass('required');
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-customer-group').trigger('change');
//--></script>
";
        // line 248
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/account/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  685 => 248,  658 => 224,  649 => 218,  644 => 216,  637 => 213,  631 => 210,  628 => 209,  626 => 208,  621 => 206,  610 => 198,  605 => 196,  595 => 189,  590 => 187,  585 => 185,  580 => 182,  573 => 180,  566 => 176,  554 => 173,  546 => 170,  541 => 169,  539 => 168,  536 => 167,  529 => 163,  517 => 160,  509 => 157,  504 => 156,  502 => 155,  499 => 154,  492 => 150,  480 => 147,  472 => 144,  467 => 143,  465 => 142,  462 => 141,  455 => 137,  448 => 135,  436 => 134,  430 => 131,  425 => 130,  423 => 129,  420 => 128,  413 => 124,  403 => 123,  396 => 121,  391 => 120,  389 => 119,  386 => 118,  379 => 114,  369 => 113,  362 => 111,  357 => 110,  355 => 109,  352 => 108,  345 => 104,  342 => 103,  325 => 100,  322 => 99,  318 => 98,  314 => 97,  309 => 95,  304 => 94,  302 => 93,  299 => 92,  292 => 88,  289 => 87,  272 => 84,  269 => 83,  265 => 82,  261 => 81,  256 => 79,  251 => 78,  249 => 77,  246 => 76,  239 => 72,  236 => 71,  225 => 69,  221 => 68,  217 => 67,  211 => 66,  204 => 64,  199 => 63,  197 => 62,  194 => 61,  190 => 60,  187 => 59,  179 => 54,  174 => 52,  167 => 51,  165 => 50,  157 => 45,  152 => 43,  144 => 38,  139 => 36,  131 => 31,  126 => 29,  123 => 28,  117 => 24,  102 => 22,  98 => 21,  92 => 18,  89 => 17,  87 => 16,  83 => 15,  78 => 13,  74 => 12,  70 => 11,  66 => 10,  62 => 9,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/account/register.twig", "/Applications/XAMPP/xamppfiles/htdocs/opencart/upload/catalog/view/template/account/register.twig");
    }
}
