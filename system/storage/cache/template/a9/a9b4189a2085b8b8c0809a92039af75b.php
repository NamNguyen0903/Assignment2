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

/* catalog/view/template/checkout/register.twig */
class __TwigTemplate_588d390193af800f7d8bb5fe3bffb98a extends Template
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
        echo "<form id=\"form-register\">
  <p>";
        // line 2
        echo ($context["text_login"] ?? null);
        echo "</p>
  <fieldset>
    <legend>";
        // line 4
        echo ($context["heading_title"] ?? null);
        echo "</legend>
    <div class=\"row\">
      ";
        // line 6
        if (($context["config_checkout_guest"] ?? null)) {
            // line 7
            echo "        <div class=\"col mb-3 required\">
          <div class=\"form-check form-check-inline\">
            <input type=\"radio\" name=\"account\" value=\"1\" id=\"input-register\" class=\"form-check-input\"";
            // line 9
            if (($context["account"] ?? null)) {
                echo " checked";
            }
            echo "/> <label for=\"input-register\" class=\"form-check-label\">";
            echo ($context["text_register"] ?? null);
            echo "</label>
          </div>
          <div class=\"form-check form-check-inline\">
            <input type=\"radio\" name=\"account\" value=\"0\" id=\"input-guest\" class=\"form-check-input\"";
            // line 12
            if ( !($context["account"] ?? null)) {
                echo " checked";
            }
            echo "/> <label for=\"input-guest\" class=\"form-check-label\">";
            echo ($context["text_guest"] ?? null);
            echo "</label>
          </div>
        </div>
      ";
        }
        // line 16
        echo "      <div class=\"col mb-3";
        if ((twig_length_filter($this->env, ($context["customer_groups"] ?? null)) <= 1)) {
            echo " d-none";
        }
        echo "\">
        <label class=\"form-label\">";
        // line 17
        echo ($context["entry_customer_group"] ?? null);
        echo "</label>
        <select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-select\">
          ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 20
            echo "            <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 20);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 20) == ($context["customer_group_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 20);
            echo "</option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        </select>
      </div>
    </div>
    <div class=\"row row-cols-1 row-cols-md-2\">
      <div class=\"col mb-3 required\">
        <label for=\"input-firstname\" class=\"form-label\">";
        // line 27
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
        <input type=\"text\" name=\"firstname\" value=\"";
        // line 28
        echo ($context["firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"form-control\"/>
        <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
      </div>
      <div class=\"col mb-3 required\">
        <label for=\"input-lastname\" class=\"form-label\">";
        // line 32
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
        <input type=\"text\" name=\"lastname\" value=\"";
        // line 33
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname\" class=\"form-control\"/>
        <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
      </div>
      <div class=\"col mb-3 required\">
        <label for=\"input-email\" class=\"form-label\">";
        // line 37
        echo ($context["entry_email"] ?? null);
        echo "</label>
        <input type=\"text\" name=\"email\" value=\"";
        // line 38
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
        <div id=\"error-email\" class=\"invalid-feedback\"></div>
      </div>
      ";
        // line 41
        if (($context["config_telephone_display"] ?? null)) {
            // line 42
            echo "        <div class=\"col mb-3";
            if (($context["config_telephone_required"] ?? null)) {
                echo " required";
            }
            echo "\">
          <label for=\"input-telephone\" class=\"form-label\">";
            // line 43
            echo ($context["entry_telephone"] ?? null);
            echo "</label>
          <input type=\"text\" name=\"telephone\" value=\"";
            // line 44
            echo ($context["telephone"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_telephone"] ?? null);
            echo "\" id=\"input-telephone\" class=\"form-control\"/>
          <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
        </div>
      ";
        }
        // line 48
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 49
            echo "
        ";
            // line 50
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 50) == "account")) {
                // line 51
                echo "
          ";
                // line 52
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 52) == "select")) {
                    // line 53
                    echo "            <div class=\"col mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 53);
                    echo "\">
              <label for=\"input-custom-field-";
                    // line 54
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 54);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 54);
                    echo "</label> <select name=\"custom_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 54);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 54);
                    echo "]\" id=\"input-customer-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 54);
                    echo "\" class=\"form-select\">
                <option value=\"\">";
                    // line 55
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                ";
                    // line 56
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 56));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 57
                        echo "                  <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 57);
                        echo "\"";
                        if (((($__internal_compile_0 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 57)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 57) == (($__internal_compile_1 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 57)] ?? null) : null)))) {
                            echo " selected";
                        }
                        echo ">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 57);
                        echo "</option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 59
                    echo "              </select>
              <div id=\"error-custom-field-";
                    // line 60
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 60);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 63
                echo "
          ";
                // line 64
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 64) == "radio")) {
                    // line 65
                    echo "            <div class=\"col mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 65);
                    echo "\">
              <label class=\"form-label\">";
                    // line 66
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 66);
                    echo "</label>
              <div id=\"input-custom-field-";
                    // line 67
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 67);
                    echo "\">
                ";
                    // line 68
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 68));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 69
                        echo "                  <div class=\"form-check\">
                    <input type=\"radio\" name=\"custom_field[";
                        // line 70
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 70);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 70);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 70);
                        echo "\" id=\"input-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 70);
                        echo "\" class=\"form-check-input\"";
                        if (((($__internal_compile_2 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 70)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 70) == (($__internal_compile_3 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 70)] ?? null) : null)))) {
                            echo " checked";
                        }
                        echo "/>
                    <label for=\"input-custom-value-";
                        // line 71
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 71);
                        echo "\" class=\"form-check-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 71);
                        echo "</label>
                  </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 74
                    echo "              </div>
              <div id=\"error-custom-field-";
                    // line 75
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 75);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 78
                echo "
          ";
                // line 79
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 79) == "checkbox")) {
                    // line 80
                    echo "            <div class=\"col mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 80);
                    echo "\">
              <label class=\"form-label\">";
                    // line 81
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 81);
                    echo "</label>
              <div id=\"input-custom-field-";
                    // line 82
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 82);
                    echo "\">
                ";
                    // line 83
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 83));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 84
                        echo "                  <div class=\"form-check\">
                    <input type=\"checkbox\" name=\"custom_field[";
                        // line 85
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 85);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 85);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 85);
                        echo "\" id=\"input-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 85);
                        echo "\" class=\"form-check-input\"";
                        if (((($__internal_compile_4 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 85)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 85), (($__internal_compile_5 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 85)] ?? null) : null)))) {
                            echo " checked";
                        }
                        echo "/>
                    <label for=\"input-custom-value-";
                        // line 86
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 86);
                        echo "\" class=\"form-check-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 86);
                        echo "</label>
                  </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 89
                    echo "              </div>
              <div id=\"error-custom-field-";
                    // line 90
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 90);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 93
                echo "
          ";
                // line 94
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 94) == "text")) {
                    // line 95
                    echo "            <div class=\"col mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 95);
                    echo "\">
              <label for=\"input-custom-field-";
                    // line 96
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 96);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 96);
                    echo "</label>
              <input type=\"text\" name=\"custom_field[";
                    // line 97
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 97);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 97);
                    echo "]\" value=\"";
                    if ((($__internal_compile_6 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 97)] ?? null) : null)) {
                        echo (($__internal_compile_7 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 97)] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 97);
                    }
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 97);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 97);
                    echo "\" class=\"form-control\"/>
              <div id=\"error-custom-field-";
                    // line 98
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 98);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 101
                echo "
          ";
                // line 102
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 102) == "textarea")) {
                    // line 103
                    echo "            <div class=\"col mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 103);
                    echo "\">
              <label for=\"input-custom-field-";
                    // line 104
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 104);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 104);
                    echo "</label> <textarea name=\"custom_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 104);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 104);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 104);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 104);
                    echo "\" class=\"form-control\">";
                    if ((($__internal_compile_8 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 104)] ?? null) : null)) {
                        echo (($__internal_compile_9 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 104)] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 104);
                    }
                    echo "</textarea>
              <div id=\"error-custom-field-";
                    // line 105
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 105);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 108
                echo "
          ";
                // line 109
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 109) == "file")) {
                    // line 110
                    echo "            <div class=\"col mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 110);
                    echo "\">
              <label for=\"input-custom-field-";
                    // line 111
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 111);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 111);
                    echo "</label>
              <div>
                <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    // line 113
                    echo ($context["upload"] ?? null);
                    echo "\" data-oc-size-max=\"";
                    echo ($context["config_file_max_size"] ?? null);
                    echo "\" data-oc-size-error=\"";
                    echo ($context["error_upload_size"] ?? null);
                    echo "\" data-oc-target=\"#input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 113);
                    echo "\" class=\"btn btn-light\"><i class=\"fa-solid fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                <input type=\"hidden\" name=\"custom_field[";
                    // line 114
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 114);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 114);
                    echo "]\" value=\"";
                    if ((($__internal_compile_10 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 114)] ?? null) : null)) {
                        echo (($__internal_compile_11 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 114)] ?? null) : null);
                    }
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 114);
                    echo "\"/>
              </div>
              <div id=\"error-custom-field-";
                    // line 116
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 116);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 119
                echo "
          ";
                // line 120
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 120) == "date")) {
                    // line 121
                    echo "            <div class=\"col mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 121);
                    echo "\">
              <label for=\"input-custom-field-";
                    // line 122
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 122);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 122);
                    echo "</label>
              <div class=\"input-group\">
                <input type=\"text\" name=\"custom_field[";
                    // line 124
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 124);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 124);
                    echo "]\" value=\"";
                    if ((($__internal_compile_12 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 124)] ?? null) : null)) {
                        echo (($__internal_compile_13 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 124)] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 124);
                    }
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 124);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 124);
                    echo "\" class=\"form-control date\"/>
                <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
              </div>
              <div id=\"error-custom-field-";
                    // line 127
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 127);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 130
                echo "
          ";
                // line 131
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 131) == "time")) {
                    // line 132
                    echo "            <div class=\"col mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 132);
                    echo "\">
              <label for=\"input-custom-field-";
                    // line 133
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 133);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 133);
                    echo "</label>
              <div class=\"input-group\">
                <input type=\"text\" name=\"custom_field[";
                    // line 135
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 135);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 135);
                    echo "]\" value=\"";
                    if ((($__internal_compile_14 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 135)] ?? null) : null)) {
                        echo (($__internal_compile_15 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 135)] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 135);
                    }
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 135);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 135);
                    echo "\" class=\"form-control time\"/>
                <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
              </div>
              <div id=\"error-custom-field-";
                    // line 138
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 138);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 141
                echo "
          ";
                // line 142
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 142) == "datetime")) {
                    // line 143
                    echo "            <div class=\"col mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 143);
                    echo "\">
              <label for=\"input-custom-field-";
                    // line 144
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 144);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 144);
                    echo "</label>
              <div class=\"input-group\">
                <input type=\"text\" name=\"custom_field[";
                    // line 146
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 146);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 146);
                    echo "]\" value=\"";
                    if ((($__internal_compile_16 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 146)] ?? null) : null)) {
                        echo (($__internal_compile_17 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 146)] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 146);
                    }
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 146);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 146);
                    echo "\" class=\"form-control datetime\"/>
                <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
              </div>
              <div id=\"error-custom-field-";
                    // line 149
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 149);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 152
                echo "
        ";
            }
            // line 154
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "    </div>
  </fieldset>
  ";
        // line 157
        if (($context["config_checkout_payment_address"] ?? null)) {
            // line 158
            echo "    <fieldset>
      <legend>";
            // line 159
            echo ($context["text_payment_address"] ?? null);
            echo "</legend>
      <div class=\"row row-cols-1 row-cols-md-2\">
        <div class=\"col mb-3\">
          <label for=\"input-payment-company\" class=\"form-label\">";
            // line 162
            echo ($context["entry_company"] ?? null);
            echo "</label> <input type=\"text\" name=\"payment_company\" value=\"";
            echo ($context["payment_company"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_company"] ?? null);
            echo "\" id=\"input-payment-company\" class=\"form-control\"/>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-payment-address-1\" class=\"form-label\">";
            // line 165
            echo ($context["entry_address_1"] ?? null);
            echo "</label> <input type=\"text\" name=\"payment_address_1\" value=\"";
            echo ($context["payment_address_1"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_address_1"] ?? null);
            echo "\" id=\"input-payment-address-1\" class=\"form-control\"/>
          <div id=\"error-payment-address-1\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3\">
          <label for=\"input-payment-address-2\" class=\"form-label\">";
            // line 169
            echo ($context["entry_address_2"] ?? null);
            echo "</label> <input type=\"text\" name=\"payment_address_2\" value=\"";
            echo ($context["payment_address_2"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_address_2"] ?? null);
            echo "\" id=\"input-payment-address-2\" class=\"form-control\"/>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-payment-city\" class=\"form-label\">";
            // line 172
            echo ($context["entry_city"] ?? null);
            echo "</label> <input type=\"text\" name=\"payment_city\" value=\"";
            echo ($context["payment_city"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_city"] ?? null);
            echo "\" id=\"input-payment-city\" class=\"form-control\"/>
          <div id=\"error-payment-city\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-payment-postcode\" class=\"form-label\">";
            // line 176
            echo ($context["entry_postcode"] ?? null);
            echo "</label> <input type=\"text\" name=\"payment_postcode\" value=\"";
            echo ($context["payment_postcode"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_postcode"] ?? null);
            echo "\" id=\"input-payment-postcode\" class=\"form-control\"/>
          <div id=\"error-payment-postcode\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-payment-country\" class=\"form-label\">";
            // line 180
            echo ($context["entry_country"] ?? null);
            echo "</label> <select name=\"payment_country_id\" id=\"input-payment-country\" class=\"form-select\">
            <option value=\"\">";
            // line 181
            echo ($context["text_select"] ?? null);
            echo "</option>
            ";
            // line 182
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 183
                echo "              <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 183);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 183) == ($context["payment_country_id"] ?? null))) {
                    echo " selected";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 183);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 185
            echo "          </select>
          <div id=\"error-payment-country\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-payment-zone\" class=\"form-label\">";
            // line 189
            echo ($context["entry_zone"] ?? null);
            echo "</label>
          <select name=\"payment_zone_id\" id=\"input-payment-zone\" class=\"form-select\" data-oc-value=\"";
            // line 190
            echo ($context["payment_zone_id"] ?? null);
            echo "\"></select>
          <div id=\"error-payment-zone\" class=\"invalid-feedback\"></div>
        </div>
        ";
            // line 193
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                // line 194
                echo "          ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 194) == "address")) {
                    // line 195
                    echo "
            ";
                    // line 196
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 196) == "select")) {
                        // line 197
                        echo "              <div class=\"col mb-3";
                        if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 197)) {
                            echo " required";
                        }
                        echo " custom-field custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 197);
                        echo "\">
                <label for=\"input-payment-custom-field-";
                        // line 198
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 198);
                        echo "\" class=\"form-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 198);
                        echo "</label> <select name=\"payment_custom_field[";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 198);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 198);
                        echo "]\" id=\"input-payment-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 198);
                        echo "\" class=\"form-select\">
                  <option value=\"\">";
                        // line 199
                        echo ($context["text_select"] ?? null);
                        echo "</option>
                  ";
                        // line 200
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 200));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            // line 201
                            echo "                    <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 201);
                            echo "\"";
                            if (((($__internal_compile_18 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 201)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 201) == (($__internal_compile_19 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 201)] ?? null) : null)))) {
                                echo " selected";
                            }
                            echo ">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 201);
                            echo "</option>
                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 203
                        echo "                </select>
                <div id=\"error-payment-custom-field-";
                        // line 204
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 204);
                        echo "\" class=\"invalid-feedback\"></div>
              </div>
            ";
                    }
                    // line 207
                    echo "
            ";
                    // line 208
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 208) == "radio")) {
                        // line 209
                        echo "              <div class=\"col mb-3";
                        if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 209)) {
                            echo " required";
                        }
                        echo " custom-field custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 209);
                        echo "\">
                <label class=\"form-label\">";
                        // line 210
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 210);
                        echo "</label>
                <div id=\"input-payment-custom-field-";
                        // line 211
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 211);
                        echo "\">
                  ";
                        // line 212
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 212));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            // line 213
                            echo "                    <div class=\"form-check\">
                      <input type=\"radio\" name=\"payment_custom_field[";
                            // line 214
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 214);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 214);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 214);
                            echo "\" id=\"input-payment-custom-value-";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 214);
                            echo "\" class=\"form-check-input\"";
                            if (((($__internal_compile_20 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 214)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 214) == (($__internal_compile_21 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 214)] ?? null) : null)))) {
                                echo " checked";
                            }
                            echo "/> <label for=\"input-payment-custom-value-";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 214);
                            echo "\" class=\"form-check-label\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 214);
                            echo "</label>
                    </div>
                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 217
                        echo "                </div>
                <div id=\"error-payment-custom-field-";
                        // line 218
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 218);
                        echo "\" class=\"invalid-feedback\"></div>
              </div>
            ";
                    }
                    // line 221
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 221) == "checkbox")) {
                        // line 222
                        echo "              <div class=\"col mb-3";
                        if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 222)) {
                            echo " required";
                        }
                        echo " custom-field custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 222);
                        echo "\">
                <label class=\"form-label\">";
                        // line 223
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 223);
                        echo "</label>
                <div id=\"input-payment-custom-field-";
                        // line 224
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 224);
                        echo "\">
                  ";
                        // line 225
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 225));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            // line 226
                            echo "                    <div class=\"form-check\">
                      <input type=\"checkbox\" name=\"payment_custom_field[";
                            // line 227
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 227);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 227);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 227);
                            echo "\" id=\"input-payment-custom-value-";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 227);
                            echo "\" class=\"form-check-input\"";
                            if (((($__internal_compile_22 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 227)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 227), (($__internal_compile_23 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 227)] ?? null) : null)))) {
                                echo " checked";
                            }
                            echo "/> <label for=\"input-payment-custom-value-";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 227);
                            echo "\" class=\"form-check-label\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 227);
                            echo "</label>
                    </div>
                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 230
                        echo "                </div>
                <div id=\"error-payment-custom-field-";
                        // line 231
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 231);
                        echo "\" class=\"invalid-feedback\"></div>
              </div>
            ";
                    }
                    // line 234
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 234) == "text")) {
                        // line 235
                        echo "              <div class=\"col mb-3";
                        if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 235)) {
                            echo " required";
                        }
                        echo " custom-field custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 235);
                        echo "\">
                <label for=\"input-payment-custom-field-";
                        // line 236
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 236);
                        echo "\" class=\"form-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 236);
                        echo "</label>
                <input type=\"text\" name=\"payment_custom_field[";
                        // line 237
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 237);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 237);
                        echo "]\" value=\"";
                        if ((($__internal_compile_24 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 237)] ?? null) : null)) {
                            echo (($__internal_compile_25 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 237)] ?? null) : null);
                        } else {
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 237);
                        }
                        echo "\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 237);
                        echo "\" id=\"input-payment-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 237);
                        echo "\" class=\"form-control\"/>
                <div id=\"error-payment-custom-field-";
                        // line 238
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 238);
                        echo "\" class=\"invalid-feedback\"></div>
              </div>
            ";
                    }
                    // line 241
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 241) == "textarea")) {
                        // line 242
                        echo "              <div class=\"col mb-3";
                        if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 242)) {
                            echo " required";
                        }
                        echo " custom-field custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 242);
                        echo "\">
                <label for=\"input-payment-custom-field-";
                        // line 243
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 243);
                        echo "\" class=\"form-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 243);
                        echo "</label> <textarea name=\"payment_custom_field[";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 243);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 243);
                        echo "]\" rows=\"5\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 243);
                        echo "\" id=\"input-payment-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 243);
                        echo "\" class=\"form-control\">";
                        if ((($__internal_compile_26 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 243)] ?? null) : null)) {
                            echo (($__internal_compile_27 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 243)] ?? null) : null);
                        } else {
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 243);
                        }
                        echo "</textarea>
                <div id=\"error-payment-custom-field-";
                        // line 244
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 244);
                        echo "\" class=\"invalid-feedback\"></div>
              </div>
            ";
                    }
                    // line 247
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 247) == "file")) {
                        // line 248
                        echo "              <div class=\"col mb-3";
                        if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 248)) {
                            echo " required";
                        }
                        echo " custom-field custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 248);
                        echo "\">
                <label class=\"form-label\">";
                        // line 249
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 249);
                        echo "</label>
                <div>
                  <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                        // line 251
                        echo ($context["upload"] ?? null);
                        echo "\" data-oc-size-max=\"";
                        echo ($context["config_file_max_size"] ?? null);
                        echo "\" data-oc-size-error=\"";
                        echo ($context["error_upload_size"] ?? null);
                        echo "\" data-oc-target=\"#input-payment-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 251);
                        echo "\" class=\"btn btn-light\"><i class=\"fa-solid fa-upload\"></i> ";
                        echo ($context["button_upload"] ?? null);
                        echo "</button>
                  <input type=\"hidden\" name=\"payment_custom_field[";
                        // line 252
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 252);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 252);
                        echo "]\" value=\"";
                        if ((($__internal_compile_28 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 252)] ?? null) : null)) {
                            echo (($__internal_compile_29 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 252)] ?? null) : null);
                        }
                        echo "\" id=\"input-payment-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 252);
                        echo "\"/>
                </div>
                <div id=\"error-payment-custom-field-";
                        // line 254
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 254);
                        echo "\" class=\"invalid-feedback\"></div>
              </div>
            ";
                    }
                    // line 257
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 257) == "date")) {
                        // line 258
                        echo "              <div class=\"col mb-3";
                        if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 258)) {
                            echo " required";
                        }
                        echo " custom-field custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 258);
                        echo "\">
                <label for=\"input-payment-custom-field-";
                        // line 259
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 259);
                        echo "\" class=\"form-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 259);
                        echo "</label>
                <div class=\"input-group\">
                  <input type=\"text\" name=\"payment_custom_field[";
                        // line 261
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 261);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 261);
                        echo "]\" value=\"";
                        if ((($__internal_compile_30 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 261)] ?? null) : null)) {
                            echo (($__internal_compile_31 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 261)] ?? null) : null);
                        } else {
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 261);
                        }
                        echo "\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 261);
                        echo "\" id=\"input-payment-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 261);
                        echo "\" class=\"form-control date\"/>
                  <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                </div>
                <div id=\"error-payment-custom-field-";
                        // line 264
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 264);
                        echo "\" class=\"invalid-feedback\"></div>
              </div>
            ";
                    }
                    // line 267
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 267) == "time")) {
                        // line 268
                        echo "              <div class=\"col mb-3";
                        if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 268)) {
                            echo " required";
                        }
                        echo " custom-field custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 268);
                        echo "\">
                <label for=\"input-payment-custom-field-";
                        // line 269
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 269);
                        echo "\" class=\"form-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 269);
                        echo "</label>
                <div class=\"input-group\">
                  <input type=\"text\" name=\"payment_custom_field[";
                        // line 271
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 271);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 271);
                        echo "]\" value=\"";
                        if ((($__internal_compile_32 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 271)] ?? null) : null)) {
                            echo (($__internal_compile_33 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 271)] ?? null) : null);
                        } else {
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 271);
                        }
                        echo "\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 271);
                        echo "\" id=\"input-payment-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 271);
                        echo "\" class=\"form-control time\"/>
                  <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                </div>
                <div id=\"error-payment-custom-field-";
                        // line 274
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 274);
                        echo "\" class=\"invalid-feedback\"></div>
              </div>
            ";
                    }
                    // line 277
                    echo "
            ";
                    // line 278
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 278) == "datetime")) {
                        // line 279
                        echo "              <div class=\"col mb-3";
                        if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 279)) {
                            echo " required";
                        }
                        echo " custom-field custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 279);
                        echo "\">
                <label for=\"input-payment-custom-field-";
                        // line 280
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 280);
                        echo "\" class=\"form-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 280);
                        echo "</label>
                <div class=\"input-group\">
                  <input type=\"text\" name=\"payment_custom_field[";
                        // line 282
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 282);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 282);
                        echo "]\" value=\"";
                        if ((($__internal_compile_34 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 282)] ?? null) : null)) {
                            echo (($__internal_compile_35 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 282)] ?? null) : null);
                        } else {
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 282);
                        }
                        echo "\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 282);
                        echo "\" id=\"input-payment-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 282);
                        echo "\" class=\"form-control datetime\"/>
                  <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                </div>
                <div id=\"error-payment-custom-field-";
                        // line 285
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 285);
                        echo "\" class=\"invalid-feedback\"></div>
              </div>
            ";
                    }
                    // line 288
                    echo "
          ";
                }
                // line 290
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 291
            echo "
        ";
            // line 292
            if (($context["shipping_required"] ?? null)) {
                // line 293
                echo "          <div class=\"col mb-3\">
            <div class=\"form-check\">
              <input type=\"checkbox\" name=\"address_match\" value=\"1\" id=\"input-address-match\" class=\"form-check-input\" checked/> <label for=\"input-address-match\" class=\"form-check-label\">";
                // line 295
                echo ($context["entry_match"] ?? null);
                echo "</label>
            </div>
          </div>
        ";
            }
            // line 299
            echo "
      </div>
    </fieldset>
  ";
        }
        // line 303
        echo "  <fieldset id=\"shipping-address\" style=\"display: ";
        if ( !($context["config_checkout_payment_address"] ?? null)) {
            echo "block";
        } else {
            echo "none";
        }
        echo ";\">
    <legend>";
        // line 304
        echo ($context["text_shipping_address"] ?? null);
        echo "</legend>
    <div class=\"row row-cols-1 row-cols-md-2\">
      ";
        // line 306
        if (($context["config_checkout_payment_address"] ?? null)) {
            // line 307
            echo "        <div class=\"col mb-3 required\">
          <label for=\"input-shipping-firstname\" class=\"form-label\">";
            // line 308
            echo ($context["entry_firstname"] ?? null);
            echo "</label>
          <input type=\"text\" name=\"shipping_firstname\" value=\"";
            // line 309
            echo ($context["shipping_firstname"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_firstname"] ?? null);
            echo "\" id=\"input-shipping-firstname\" class=\"form-control\"/>
          <div id=\"error-shipping-firstname\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-shipping-lastname\" class=\"form-label\">";
            // line 313
            echo ($context["entry_lastname"] ?? null);
            echo "</label>
          <input type=\"text\" name=\"shipping_lastname\" value=\"";
            // line 314
            echo ($context["shipping_lastname"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_lastname"] ?? null);
            echo "\" id=\"input-shipping-lastname\" class=\"form-control\"/>
          <div id=\"error-shipping-lastname\" class=\"invalid-feedback\"></div>
        </div>
      ";
        }
        // line 318
        echo "      <div class=\"col mb-3\">
        <label for=\"input-shipping-company\" class=\"form-label\">";
        // line 319
        echo ($context["entry_company"] ?? null);
        echo "</label>
        <input type=\"text\" name=\"shipping_company\" value=\"";
        // line 320
        echo ($context["shipping_company"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_company"] ?? null);
        echo "\" id=\"input-shipping-company\" class=\"form-control\"/>
      </div>
      <div class=\"col mb-3 required\">
        <label for=\"input-shipping-address-1\" class=\"form-label\">";
        // line 323
        echo ($context["entry_address_1"] ?? null);
        echo "</label>
        <input type=\"text\" name=\"shipping_address_1\" value=\"";
        // line 324
        echo ($context["shipping_address_1"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_address_1"] ?? null);
        echo "\" id=\"input-shipping-address-1\" class=\"form-control\"/>
        <div id=\"error-shipping-address-1\" class=\"invalid-feedback\"></div>
      </div>
      <div class=\"col mb-3\">
        <label for=\"input-shipping-address-2\" class=\"form-label\">";
        // line 328
        echo ($context["entry_address_2"] ?? null);
        echo "</label>
        <input type=\"text\" name=\"shipping_address_2\" value=\"";
        // line 329
        echo ($context["shipping_address_2"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_address_2"] ?? null);
        echo "\" id=\"input-shipping-address-2\" class=\"form-control\"/>
      </div>
      <div class=\"col mb-3 required\">
        <label for=\"input-shipping-city\" class=\"form-label\">";
        // line 332
        echo ($context["entry_city"] ?? null);
        echo "</label>
        <input type=\"text\" name=\"shipping_city\" value=\"";
        // line 333
        echo ($context["shipping_city"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_city"] ?? null);
        echo "\" id=\"input-shipping-city\" class=\"form-control\"/>
        <div id=\"error-shipping-city\" class=\"invalid-feedback\"></div>
      </div>
      <div class=\"col mb-3 required\">
        <label for=\"input-shipping-postcode\" class=\"form-label\">";
        // line 337
        echo ($context["entry_postcode"] ?? null);
        echo "</label>
        <input type=\"text\" name=\"shipping_postcode\" value=\"";
        // line 338
        echo ($context["shipping_postcode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_postcode"] ?? null);
        echo "\" id=\"input-shipping-postcode\" class=\"form-control\"/>
        <div id=\"error-shipping-postcode\" class=\"invalid-feedback\"></div>
      </div>
      <div class=\"col mb-3 required\">
        <label for=\"input-shipping-country\" class=\"form-label\">";
        // line 342
        echo ($context["entry_country"] ?? null);
        echo "</label>
        <select name=\"shipping_country_id\" id=\"input-shipping-country\" class=\"form-select\">
          <option value=\"\">";
        // line 344
        echo ($context["text_select"] ?? null);
        echo "</option>
          ";
        // line 345
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 346
            echo "            <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 346);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 346) == ($context["shipping_country_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 346);
            echo "</option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 348
        echo "        </select>
        <div id=\"error-shipping-country\" class=\"invalid-feedback\"></div>
      </div>
      <div class=\"col mb-3 required\">
        <label for=\"input-shipping-zone\" class=\"form-label\">";
        // line 352
        echo ($context["entry_zone"] ?? null);
        echo "</label>
        <select name=\"shipping_zone_id\" id=\"input-shipping-zone\" class=\"form-select\" data-oc-value=\"";
        // line 353
        echo ($context["shipping_zone_id"] ?? null);
        echo "\"></select>
        <div id=\"error-shipping-zone\" class=\"invalid-feedback\"></div>
      </div>
      ";
        // line 356
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 357
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 357) == "address")) {
                // line 358
                echo "
          ";
                // line 359
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 359) == "select")) {
                    // line 360
                    echo "            <div class=\"col mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 360)) {
                        echo " required";
                    }
                    echo " custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 360);
                    echo "\">
              <label for=\"input-shipping-custom-field-";
                    // line 361
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 361);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 361);
                    echo "</label>
              <select name=\"shipping_custom_field[";
                    // line 362
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 362);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 362);
                    echo "]\" id=\"input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 362);
                    echo "\" class=\"form-select\">
                <option value=\"\">";
                    // line 363
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                ";
                    // line 364
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 364));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 365
                        echo "                  <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 365);
                        echo "\"";
                        if (((($__internal_compile_36 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 365)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 365) == (($__internal_compile_37 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 365)] ?? null) : null)))) {
                            echo " selected";
                        }
                        echo ">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 365);
                        echo "</option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 367
                    echo "              </select>
              <div id=\"error-shipping-custom-field-";
                    // line 368
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 368);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 371
                echo "
          ";
                // line 372
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 372) == "radio")) {
                    // line 373
                    echo "            <div class=\"col mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 373)) {
                        echo " required";
                    }
                    echo " custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 373);
                    echo "\">
              <label class=\"form-label\">";
                    // line 374
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 374);
                    echo "</label>
              <div id=\"input-shipping-custom-field-";
                    // line 375
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 375);
                    echo "\">
                ";
                    // line 376
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 376));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 377
                        echo "                  <div class=\"form-check\">
                    <input type=\"radio\" name=\"shipping_custom_field[";
                        // line 378
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 378);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 378);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 378);
                        echo "\" id=\"input-shipping-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 378);
                        echo "\" class=\"form-check-input\"";
                        if (((($__internal_compile_38 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 378)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 378), (($__internal_compile_39 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 378)] ?? null) : null)))) {
                            echo " checked";
                        }
                        echo "/>
                    <label for=\"input-shipping-custom-value-";
                        // line 379
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 379);
                        echo "\" class=\"form-check-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 379);
                        echo "</label>
                  </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 382
                    echo "              </div>
              <div id=\"error-shipping-custom-field-";
                    // line 383
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 383);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 386
                echo "
          ";
                // line 387
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 387) == "checkbox")) {
                    // line 388
                    echo "            <div class=\"col mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 388)) {
                        echo " required";
                    }
                    echo " custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 388);
                    echo "\">
              <label class=\"form-label\">";
                    // line 389
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 389);
                    echo "</label>
              <div id=\"input-shipping-custom-field-";
                    // line 390
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 390);
                    echo "\">
                ";
                    // line 391
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 391));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 392
                        echo "                  <div class=\"form-check\">
                    <input type=\"checkbox\" name=\"shipping_custom_field[";
                        // line 393
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 393);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 393);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 393);
                        echo "\" id=\"input-shipping-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 393);
                        echo "\" class=\"form-check-input\"";
                        if (((($__internal_compile_40 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 393)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 393), (($__internal_compile_41 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 393)] ?? null) : null)))) {
                            echo " checked";
                        }
                        echo "/>
                    <label for=\"input-shipping-custom-value-";
                        // line 394
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 394);
                        echo "\" class=\"form-check-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 394);
                        echo "</label>
                  </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 397
                    echo "              </div>
              <div id=\"error-shipping-custom-field-";
                    // line 398
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 398);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 401
                echo "
          ";
                // line 402
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 402) == "text")) {
                    // line 403
                    echo "            <div class=\"col mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 403)) {
                        echo " required";
                    }
                    echo " custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 403);
                    echo "\">
              <label for=\"input-shipping-custom-field-";
                    // line 404
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 404);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 404);
                    echo "</label>
              <input type=\"text\" name=\"shipping_custom_field[";
                    // line 405
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 405);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 405);
                    echo "]\" value=\"";
                    if ((($__internal_compile_42 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 405)] ?? null) : null)) {
                        echo (($__internal_compile_43 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 405)] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 405);
                    }
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 405);
                    echo "\" id=\"input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 405);
                    echo "\" class=\"form-control\"/>
              <div id=\"error-shipping-custom-field-";
                    // line 406
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 406);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 409
                echo "
          ";
                // line 410
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 410) == "textarea")) {
                    // line 411
                    echo "            <div class=\"col mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 411)) {
                        echo " required";
                    }
                    echo " custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 411);
                    echo "\">
              <label for=\"input-shipping-custom-field-";
                    // line 412
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 412);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 412);
                    echo "</label>
              <textarea name=\"shipping_custom_field[";
                    // line 413
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 413);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 413);
                    echo "]\" rows=\"5\" placeholder=\"";
                    if ((($__internal_compile_44 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_44) || $__internal_compile_44 instanceof ArrayAccess ? ($__internal_compile_44[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 413)] ?? null) : null)) {
                        echo (($__internal_compile_45 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_45) || $__internal_compile_45 instanceof ArrayAccess ? ($__internal_compile_45[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 413)] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 413);
                    }
                    echo "\" id=\"input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 413);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 413);
                    echo "</textarea>
              <div id=\"error-shipping-custom-field-";
                    // line 414
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 414);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 417
                echo "          ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 417) == "file")) {
                    // line 418
                    echo "            <div class=\"col mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 418)) {
                        echo " required";
                    }
                    echo " custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 418);
                    echo "\">
              <label class=\"form-label\">";
                    // line 419
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 419);
                    echo "</label>
              <div>
                <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    // line 421
                    echo ($context["upload"] ?? null);
                    echo "\" data-oc-size-max=\"";
                    echo ($context["config_file_max_size"] ?? null);
                    echo "\" data-oc-size-error=\"";
                    echo ($context["error_upload_size"] ?? null);
                    echo "\" data-oc-target=\"#input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 421);
                    echo "\" class=\"btn btn-light\"><i class=\"fa-solid fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                <input type=\"hidden\" name=\"shipping_custom_field[";
                    // line 422
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 422);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 422);
                    echo "]\" value=\"";
                    if ((($__internal_compile_46 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_46) || $__internal_compile_46 instanceof ArrayAccess ? ($__internal_compile_46[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 422)] ?? null) : null)) {
                        echo (($__internal_compile_47 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_47) || $__internal_compile_47 instanceof ArrayAccess ? ($__internal_compile_47[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 422)] ?? null) : null);
                    }
                    echo "\" id=\"input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 422);
                    echo "\"/>
                <div id=\"error-shipping-custom-field-";
                    // line 423
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 423);
                    echo "\" class=\"invalid-feedback\"></div>
              </div>
            </div>
          ";
                }
                // line 427
                echo "
          ";
                // line 428
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 428) == "date")) {
                    // line 429
                    echo "            <div class=\"col mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 429)) {
                        echo " required";
                    }
                    echo " custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 429);
                    echo "\">
              <label for=\"input-shipping-custom-field-";
                    // line 430
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 430);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 430);
                    echo "</label>
              <div class=\"input-group\">
                <input type=\"text\" name=\"shipping_custom_field[";
                    // line 432
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 432);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 432);
                    echo "]\" value=\"";
                    if ((($__internal_compile_48 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_48) || $__internal_compile_48 instanceof ArrayAccess ? ($__internal_compile_48[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 432)] ?? null) : null)) {
                        echo (($__internal_compile_49 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_49) || $__internal_compile_49 instanceof ArrayAccess ? ($__internal_compile_49[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 432)] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 432);
                    }
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 432);
                    echo "\" id=\"input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 432);
                    echo "\" class=\"form-control date\"/>
                <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
              </div>
              <div id=\"error-shipping-custom-field-";
                    // line 435
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 435);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 438
                echo "
          ";
                // line 439
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 439) == "time")) {
                    // line 440
                    echo "            <div class=\"col mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 440)) {
                        echo " required";
                    }
                    echo " custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 440);
                    echo "\">
              <label for=\"input-shipping-custom-field-";
                    // line 441
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 441);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 441);
                    echo "</label>
              <div class=\"input-group\">
                <input type=\"text\" name=\"shipping_custom_field[";
                    // line 443
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 443);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 443);
                    echo "]\" value=\"";
                    if ((($__internal_compile_50 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_50) || $__internal_compile_50 instanceof ArrayAccess ? ($__internal_compile_50[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 443)] ?? null) : null)) {
                        echo (($__internal_compile_51 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_51) || $__internal_compile_51 instanceof ArrayAccess ? ($__internal_compile_51[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 443)] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 443);
                    }
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 443);
                    echo "\" id=\"input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 443);
                    echo "\" class=\"form-control time\"/>
                <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
              </div>
              <div id=\"error-shipping-custom-field-";
                    // line 446
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 446);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 449
                echo "
          ";
                // line 450
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 450) == "datetime")) {
                    // line 451
                    echo "            <div class=\"col mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 451)) {
                        echo " required";
                    }
                    echo " custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 451);
                    echo "\">
              <label for=\"input-shipping-custom-field-";
                    // line 452
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 452);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 452);
                    echo "</label>
              <div class=\"input-group\">
                <input type=\"text\" name=\"shipping_custom_field[";
                    // line 454
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 454);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 454);
                    echo "]\" value=\"";
                    if ((($__internal_compile_52 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_52) || $__internal_compile_52 instanceof ArrayAccess ? ($__internal_compile_52[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 454)] ?? null) : null)) {
                        echo (($__internal_compile_53 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_53) || $__internal_compile_53 instanceof ArrayAccess ? ($__internal_compile_53[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 454)] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 454);
                    }
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 454);
                    echo "\" id=\"input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 454);
                    echo "\" class=\"form-control datetime\"/>
                <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
              </div>
              <div id=\"error-shipping-custom-field-";
                    // line 457
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 457);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 460
                echo "        ";
            }
            // line 461
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 462
        echo "    </div>
  </fieldset>
  <div id class=\"row row-cols-1 row-cols-md-2\">
    <div id=\"password\" class=\"col mb-3 required\">
      <fieldset>
        <legend>";
        // line 467
        echo ($context["text_your_password"] ?? null);
        echo "</legend>
        <div class=\"row\">
          <div class=\"col mb-3 required\">
            <label for=\"input-password\" class=\"form-label\">";
        // line 470
        echo ($context["entry_password"] ?? null);
        echo "</label> <input type=\"password\" name=\"password\" value=\"\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\"/>
            <div id=\"error-password\" class=\"invalid-feedback\"></div>
          </div>
        </div>
      </fieldset>
    </div>
    <div class=\"col mb-3 required\">";
        // line 476
        echo ($context["captcha"] ?? null);
        echo "</div>
  </div>
  <div id class=\"row\">
    <div class=\"col\">
      <div class=\"form-check form-switch form-switch-lg\">
        <label for=\"input-newsletter\" class=\"form-check-label\">";
        // line 481
        echo ($context["entry_newsletter"] ?? null);
        echo "</label>
        <input type=\"checkbox\" name=\"newsletter\" value=\"1\" id=\"input-newsletter\" class=\"form-check-input\"/>
      </div>
      ";
        // line 484
        if (($context["text_agree"] ?? null)) {
            // line 485
            echo "        <div id=\"register-agree\" class=\"form-check form-switch form-switch-lg\">
          <label class=\"form-check-label\">";
            // line 486
            echo ($context["text_agree"] ?? null);
            echo "</label>
          <input type=\"checkbox\" name=\"agree\" value=\"1\" id=\"input-register-agree\" class=\"form-check-input\"";
            // line 487
            if (($context["agree"] ?? null)) {
                echo " checked";
            }
            echo "/>
        </div>
      ";
        }
        // line 490
        echo "      <button type=\"submit\" id=\"button-register\" class=\"btn btn-primary mt-2\">";
        echo ($context["button_continue"] ?? null);
        echo "</button>
    </div>
  </div>
</form>
<script type=\"text/javascript\"><!--
// Account
\$('input[name=\\'account\\']').on('click', function() {
    if (\$(this).val() == 1) {
        \$('#password').removeClass('d-none');
    } else {
        // If guest hide password field
        \$('#password').addClass('d-none');
    }

    if (\$(this).val() == 1) {
        \$('#register-agree').removeClass('d-none');
    } else {
        // If guest hide register agree field
        \$('#register-agree').addClass('d-none');
    }
});

\$('input[name=\\'account\\']:checked').trigger('click');

// Customer Group
\$('#input-customer-group').on('change', function() {
    var element = this;

    chain.attach(function() {
        return \$.ajax({
            url: 'index.php?route=account/custom_field&language=";
        // line 520
        echo ($context["language"] ?? null);
        echo "&customer_group_id=' + \$(element).val(),
            dataType: 'json',
            beforeSend: function() {
                \$(element).prop('disabled', true);
            },
            complete: function() {
                \$(element).prop('disabled', false);
            },
            success: function(json) {
                \$('.custom-field').addClass('d-none');
                \$('.custom-field').removeClass('required');

                for (i = 0; i < json.length; i++) {
                    custom_field = json[i];

                    \$('.custom-field-' + custom_field['custom_field_id']).removeClass('d-none');

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
});

\$('#input-customer-group').trigger('change');

\$('#input-address-match').on('change', function() {
    if (\$(this).prop('checked')) {
        \$('#shipping-address').hide();
    } else {
        \$('#shipping-address').show();
    }
});

\$('#form-register').on('submit', function(e) {
    e.preventDefault();

    var element = this;

    chain.attach(function() {
        return \$.ajax({
            url: 'index.php?route=checkout/register.save&language=";
        // line 566
        echo ($context["language"] ?? null);
        echo "',
            type: 'post',
            dataType: 'json',
            data: \$('#form-register').serialize(),
            contentType: 'application/x-www-form-urlencoded',
            beforeSend: function() {
                \$('#button-register').button('loading');
            },
            complete: function() {
                \$('#button-register').button('reset');
            },
            success: function(json) {
                console.log(json);

                \$('#form-register').find('.is-invalid').removeClass('is-invalid');
                \$('#form-register').find('.invalid-feedback').removeClass('d-block');

                if (json['redirect']) {
                    location = json['redirect'];
                }

                if (json['error']) {
                    if (json['error']['warning']) {
                        \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                    }

                    for (key in json['error']) {
                        \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                        \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                    }
                }

                if (json['success']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    if (\$('#input-register').prop('checked')) {
                        \$('input[name=\\'account\\']').prop('disabled', true);
                        \$('#input-customer-group').prop('disabled', true);
                        \$('#input-password').prop('disabled', true);
                        \$('#input-captcha').prop('disabled', true);
                        \$('#input-register-agree').prop('disabled', true);
                    }

                    \$('#input-shipping-method').val('');
                    \$('#input-payment-method').val('');

                    \$('#checkout-confirm').load('index.php?route=checkout/confirm.confirm&language=";
        // line 612
        echo ($context["language"] ?? null);
        echo "');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});

\$('select[name\$=\\'_country_id\\']').on('change', function() {
    var element = this;
    var type = \$(this).attr('name').slice(0, -11);

    chain.attach(function() {
        return \$.ajax({
            url: 'index.php?route=localisation/country&language=";
        // line 628
        echo ($context["language"] ?? null);
        echo "&country_id=' + \$('#input-' + type + '-country').val(),
            dataType: 'json',
            beforeSend: function() {
                \$(element).prop('disabled', true);
                \$('#input-' + type + '-zone').prop('disabled', true);
            },
            complete: function() {
                \$(element).prop('disabled', false);
                \$('#input-' + type + '-zone').prop('disabled', false);
            },
            success: function(json) {
                if (json['postcode_required'] == '1') {
                    \$('#input-' + type + '-postcode').parent().addClass('required');
                } else {
                    \$('#input-' + type + '-postcode').parent().removeClass('required');
                }

                html = '<option value=\"\">";
        // line 645
        echo twig_escape_filter($this->env, ($context["text_select"] ?? null), "js");
        echo "</option>';

                if (json['zone'] && json['zone'] != '') {
                    for (i = 0; i < json['zone'].length; i++) {
                        html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                        if (json['zone'][i]['zone_id'] == \$('#input-' + type + '-zone').attr('data-oc-value')) {
                            html += ' selected';
                        }

                        html += '>' + json['zone'][i]['name'] + '</option>';
                    }
                } else {
                    html += '<option value=\"0\" selected>";
        // line 658
        echo twig_escape_filter($this->env, ($context["text_none"] ?? null), "js");
        echo "</option>';
                }

                \$('#input-' + type + '-zone').html(html);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});

\$('select[name\$=\\'_country_id\\']').trigger('change');
//--></script>
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/checkout/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2063 => 658,  2047 => 645,  2027 => 628,  2008 => 612,  1959 => 566,  1910 => 520,  1876 => 490,  1868 => 487,  1864 => 486,  1861 => 485,  1859 => 484,  1853 => 481,  1845 => 476,  1834 => 470,  1828 => 467,  1821 => 462,  1815 => 461,  1812 => 460,  1806 => 457,  1788 => 454,  1781 => 452,  1772 => 451,  1770 => 450,  1767 => 449,  1761 => 446,  1743 => 443,  1736 => 441,  1727 => 440,  1725 => 439,  1722 => 438,  1716 => 435,  1698 => 432,  1691 => 430,  1682 => 429,  1680 => 428,  1677 => 427,  1670 => 423,  1658 => 422,  1646 => 421,  1641 => 419,  1632 => 418,  1629 => 417,  1623 => 414,  1607 => 413,  1601 => 412,  1592 => 411,  1590 => 410,  1587 => 409,  1581 => 406,  1565 => 405,  1559 => 404,  1550 => 403,  1548 => 402,  1545 => 401,  1539 => 398,  1536 => 397,  1525 => 394,  1511 => 393,  1508 => 392,  1504 => 391,  1500 => 390,  1496 => 389,  1487 => 388,  1485 => 387,  1482 => 386,  1476 => 383,  1473 => 382,  1462 => 379,  1448 => 378,  1445 => 377,  1441 => 376,  1437 => 375,  1433 => 374,  1424 => 373,  1422 => 372,  1419 => 371,  1413 => 368,  1410 => 367,  1395 => 365,  1391 => 364,  1387 => 363,  1379 => 362,  1373 => 361,  1364 => 360,  1362 => 359,  1359 => 358,  1356 => 357,  1352 => 356,  1346 => 353,  1342 => 352,  1336 => 348,  1321 => 346,  1317 => 345,  1313 => 344,  1308 => 342,  1299 => 338,  1295 => 337,  1286 => 333,  1282 => 332,  1274 => 329,  1270 => 328,  1261 => 324,  1257 => 323,  1249 => 320,  1245 => 319,  1242 => 318,  1233 => 314,  1229 => 313,  1220 => 309,  1216 => 308,  1213 => 307,  1211 => 306,  1206 => 304,  1197 => 303,  1191 => 299,  1184 => 295,  1180 => 293,  1178 => 292,  1175 => 291,  1169 => 290,  1165 => 288,  1159 => 285,  1141 => 282,  1134 => 280,  1125 => 279,  1123 => 278,  1120 => 277,  1114 => 274,  1096 => 271,  1089 => 269,  1080 => 268,  1077 => 267,  1071 => 264,  1053 => 261,  1046 => 259,  1037 => 258,  1034 => 257,  1028 => 254,  1015 => 252,  1003 => 251,  998 => 249,  989 => 248,  986 => 247,  980 => 244,  960 => 243,  951 => 242,  948 => 241,  942 => 238,  926 => 237,  920 => 236,  911 => 235,  908 => 234,  902 => 231,  899 => 230,  876 => 227,  873 => 226,  869 => 225,  865 => 224,  861 => 223,  852 => 222,  849 => 221,  843 => 218,  840 => 217,  817 => 214,  814 => 213,  810 => 212,  806 => 211,  802 => 210,  793 => 209,  791 => 208,  788 => 207,  782 => 204,  779 => 203,  764 => 201,  760 => 200,  756 => 199,  744 => 198,  735 => 197,  733 => 196,  730 => 195,  727 => 194,  723 => 193,  717 => 190,  713 => 189,  707 => 185,  692 => 183,  688 => 182,  684 => 181,  680 => 180,  669 => 176,  658 => 172,  648 => 169,  637 => 165,  627 => 162,  621 => 159,  618 => 158,  616 => 157,  612 => 155,  606 => 154,  602 => 152,  596 => 149,  578 => 146,  571 => 144,  566 => 143,  564 => 142,  561 => 141,  555 => 138,  537 => 135,  530 => 133,  525 => 132,  523 => 131,  520 => 130,  514 => 127,  496 => 124,  489 => 122,  484 => 121,  482 => 120,  479 => 119,  473 => 116,  460 => 114,  448 => 113,  441 => 111,  436 => 110,  434 => 109,  431 => 108,  425 => 105,  405 => 104,  400 => 103,  398 => 102,  395 => 101,  389 => 98,  373 => 97,  367 => 96,  362 => 95,  360 => 94,  357 => 93,  351 => 90,  348 => 89,  337 => 86,  323 => 85,  320 => 84,  316 => 83,  312 => 82,  308 => 81,  303 => 80,  301 => 79,  298 => 78,  292 => 75,  289 => 74,  278 => 71,  264 => 70,  261 => 69,  257 => 68,  253 => 67,  249 => 66,  244 => 65,  242 => 64,  239 => 63,  233 => 60,  230 => 59,  215 => 57,  211 => 56,  207 => 55,  195 => 54,  190 => 53,  188 => 52,  185 => 51,  183 => 50,  180 => 49,  175 => 48,  166 => 44,  162 => 43,  155 => 42,  153 => 41,  145 => 38,  141 => 37,  132 => 33,  128 => 32,  119 => 28,  115 => 27,  108 => 22,  93 => 20,  89 => 19,  84 => 17,  77 => 16,  66 => 12,  56 => 9,  52 => 7,  50 => 6,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/checkout/register.twig", "/Applications/XAMPP/xamppfiles/htdocs/opencart/upload/catalog/view/template/checkout/register.twig");
    }
}
