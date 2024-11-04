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

/* catalog/view/template/checkout/shipping_address.twig */
class __TwigTemplate_e95434a95344a6193a032025521462be extends Template
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
        echo "<fieldset id=\"shipping-address\" style=\"display: ";
        if ((($context["payment_address_required"] ?? null) &&  !($context["addresses"] ?? null))) {
            echo "none";
        } else {
            echo "block";
        }
        echo ";\">
  <legend>";
        // line 2
        echo ($context["heading_title"] ?? null);
        echo "</legend>
  <div id=\"shipping-addresses\" style=\"display: ";
        // line 3
        if (($context["addresses"] ?? null)) {
            echo "block";
        } else {
            echo "none";
        }
        echo ";\">
    <div class=\"form-check\">
      <input type=\"radio\" name=\"shipping_existing\" value=\"1\" id=\"input-shipping-existing\" class=\"form-check-input\"";
        // line 5
        if (($context["addresses"] ?? null)) {
            echo " checked";
        }
        echo "/>
      <label for=\"input-shipping-existing\" class=\"form-check-label\">";
        // line 6
        echo ($context["text_address_existing"] ?? null);
        echo "</label>
    </div>
    <div class=\"form-check\">
      <input type=\"radio\" name=\"shipping_existing\" value=\"0\" id=\"input-shipping-new\" class=\"form-check-input\"";
        // line 9
        if ( !($context["addresses"] ?? null)) {
            echo " checked";
        }
        echo "/>
      <label for=\"input-shipping-new\" class=\"form-check-label\">";
        // line 10
        echo ($context["text_address_new"] ?? null);
        echo "</label>
    </div>
  </div>
  <div id=\"shipping-existing\" style=\"display: ";
        // line 13
        if (($context["addresses"] ?? null)) {
            echo "block";
        } else {
            echo "none";
        }
        echo ";\">
    <select name=\"address_id\" id=\"input-shipping-address\" class=\"form-select\">
      <option value=\"\">";
        // line 15
        echo ($context["text_select"] ?? null);
        echo "</option>
      ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 17
            echo "        <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 17);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 17) == ($context["address_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "firstname", [], "any", false, false, false, 17);
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "lastname", [], "any", false, false, false, 17);
            echo ",";
            if (twig_get_attribute($this->env, $this->source, $context["address"], "company", [], "any", false, false, false, 17)) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["address"], "company", [], "any", false, false, false, 17);
                echo ",";
            }
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "address_1", [], "any", false, false, false, 17);
            echo ", ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 17);
            echo ", ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "zone", [], "any", false, false, false, 17);
            echo ", ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 17);
            echo "</option>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </select>
    <div id=\"error-shipping-address\" class=\"invalid-feedback\"></div>
  </div>
  <br/>
  <div id=\"shipping-new\" style=\"display: ";
        // line 23
        if ( !($context["addresses"] ?? null)) {
            echo "block";
        } else {
            echo "none";
        }
        echo ";\">
    <form id=\"form-shipping-address\">
      <div class=\"row row-cols-1 row-cols-md-2\">
        <div class=\"col mb-3 required\">
          <label for=\"input-shipping-firstname\" class=\"form-label\">";
        // line 27
        echo ($context["entry_firstname"] ?? null);
        echo "</label >
          <input type=\"text\" name=\"firstname\" value=\"\" placeholder=\"";
        // line 28
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-shipping-firstname\" class=\"form-control\"/>
          <div id=\"error-shipping-firstname\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-shipping-lastname\" class=\"form-label\">";
        // line 32
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
          <input type=\"text\" name=\"lastname\" value=\"\" placeholder=\"";
        // line 33
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-shipping-lastname\" class=\"form-control\"/>
          <div id=\"error-shipping-lastname\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3\">
          <label for=\"input-shipping-company\" class=\"form-label\">";
        // line 37
        echo ($context["entry_company"] ?? null);
        echo "</label>
          <input type=\"text\" name=\"company\" value=\"\" placeholder=\"";
        // line 38
        echo ($context["entry_company"] ?? null);
        echo "\" id=\"input-shipping-company\" class=\"form-control\"/>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-shipping-address-1\" class=\"form-label\">";
        // line 41
        echo ($context["entry_address_1"] ?? null);
        echo "</label>
          <input type=\"text\" name=\"address_1\" value=\"\" placeholder=\"";
        // line 42
        echo ($context["entry_address_1"] ?? null);
        echo "\" id=\"input-shipping-address-1\" class=\"form-control\"/>
          <div id=\"error-shipping-address-1\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3\">
          <label for=\"input-shipping-address-2\" class=\"form-label\">";
        // line 46
        echo ($context["entry_address_2"] ?? null);
        echo "</label>
          <input type=\"text\" name=\"address_2\" value=\"\" placeholder=\"";
        // line 47
        echo ($context["entry_address_2"] ?? null);
        echo "\" id=\"input-shipping-address-2\" class=\"form-control\"/>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-shipping-city\" class=\"form-label\">";
        // line 50
        echo ($context["entry_city"] ?? null);
        echo "</label>
          <input type=\"text\" name=\"city\" value=\"\" placeholder=\"";
        // line 51
        echo ($context["entry_city"] ?? null);
        echo "\" id=\"input-shipping-city\" class=\"form-control\"/>
          <div id=\"error-shipping-city\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-shipping-postcode\" class=\"form-label\">";
        // line 55
        echo ($context["entry_postcode"] ?? null);
        echo "</label>
          <input type=\"text\" name=\"postcode\" value=\"";
        // line 56
        echo ($context["postcode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_postcode"] ?? null);
        echo "\" id=\"input-shipping-postcode\" class=\"form-control\"/>
          <div id=\"error-shipping-postcode\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-shipping-country\" class=\"form-label\">";
        // line 60
        echo ($context["entry_country"] ?? null);
        echo "</label>
          <select name=\"country_id\" id=\"input-shipping-country\" class=\"form-select\">
            <option value=\"0\">";
        // line 62
        echo ($context["text_select"] ?? null);
        echo "</option>
            ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 64
            echo "              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 64);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 64) == ($context["country_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 64);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "          </select>
          <div id=\"error-shipping-country\" class=\"invalid-feedback\"></div>
        </div>

        <div class=\"col mb-3 required\">
          <label for=\"input-shipping-zone\" class=\"form-label\">";
        // line 71
        echo ($context["entry_zone"] ?? null);
        echo "</label>
          <select name=\"zone_id\" id=\"input-shipping-zone\" class=\"form-select\"></select>
          <div id=\"error-shipping-zone\" class=\"invalid-feedback\"></div>
        </div>

        ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 77
            echo "
          ";
            // line 78
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 78) == "select")) {
                // line 79
                echo "            <div class=\"col mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 79)) {
                    echo " required";
                }
                echo " custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 79);
                echo "\">
              <label for=\"input-shipping-custom-field-";
                // line 80
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 80);
                echo "\" class=\"form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 80);
                echo "</label>
              <select name=\"custom_field[";
                // line 81
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 81);
                echo "]\" id=\"input-shipping-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 81);
                echo "\" class=\"form-select\">
                <option value=\"\">";
                // line 82
                echo ($context["text_select"] ?? null);
                echo "</option>
                ";
                // line 83
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 83));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 84
                    echo "                  <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 84);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 84);
                    echo "</option>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 86
                echo "              </select>
              <div id=\"error-shipping-custom-field-";
                // line 87
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 87);
                echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 90
            echo "
          ";
            // line 91
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 91) == "radio")) {
                // line 92
                echo "            <div class=\"col mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 92)) {
                    echo " required";
                }
                echo " custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 92);
                echo "\">
              <label class=\"form-label\">";
                // line 93
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 93);
                echo "</label>
              <div id=\"input-shipping-custom-field-";
                // line 94
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 94);
                echo "\">
                ";
                // line 95
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 95));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 96
                    echo "                  <div class=\"form-check\">
                    <input type=\"radio\" name=\"custom_field[";
                    // line 97
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 97);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 97);
                    echo "\" id=\"input-shipping-custom-value-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 97);
                    echo "\" class=\"form-check-input\"/>
                    <label for=\"input-shipping-custom-value-";
                    // line 98
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 98);
                    echo "\" class=\"form-check-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 98);
                    echo "</label>
                  </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 101
                echo "              </div>
              <div id=\"error-shipping-custom-field-";
                // line 102
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 102);
                echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 105
            echo "
          ";
            // line 106
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 106) == "checkbox")) {
                // line 107
                echo "            <div class=\"col mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 107)) {
                    echo " required";
                }
                echo " custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 107);
                echo "\">
              <label class=\"form-label\">";
                // line 108
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 108);
                echo "</label>
              <div id=\"input-shipping-custom-field-";
                // line 109
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 109);
                echo "\">
                ";
                // line 110
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 110));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 111
                    echo "                  <div class=\"form-check\">
                    <input type=\"checkbox\" name=\"custom_field[";
                    // line 112
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 112);
                    echo "][]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 112);
                    echo "\" id=\"input-shipping-custom-value-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 112);
                    echo "\" class=\"form-check-input\"/>
                    <label for=\"input-shipping-custom-value-";
                    // line 113
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 113);
                    echo "\" class=\"form-check-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 113);
                    echo "</label>
                  </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 116
                echo "              </div>
              <div id=\"error-shipping-custom-field-";
                // line 117
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 117);
                echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 120
            echo "
          ";
            // line 121
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 121) == "text")) {
                // line 122
                echo "            <div class=\"col mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 122)) {
                    echo " required";
                }
                echo " custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 122);
                echo "\">
              <label for=\"input-shipping-custom-field-";
                // line 123
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 123);
                echo "\" class=\"form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 123);
                echo "</label>
              <input type=\"text\" name=\"custom_field[";
                // line 124
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 124);
                echo "]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 124);
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 124);
                echo "\" id=\"input-shipping-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 124);
                echo "\" class=\"form-control\"/>
              <div id=\"error-shipping-custom-field-";
                // line 125
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 125);
                echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 128
            echo "
          ";
            // line 129
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 129) == "textarea")) {
                // line 130
                echo "            <div class=\"col mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 130)) {
                    echo " required";
                }
                echo " custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 130);
                echo "\">
              <label for=\"input-shipping-custom-field-";
                // line 131
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 131);
                echo "\" class=\"form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 131);
                echo "</label>
              <textarea name=\"custom_field[";
                // line 132
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 132);
                echo "]\" rows=\"5\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 132);
                echo "\" id=\"input-shipping-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 132);
                echo "\" class=\"form-control\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 132);
                echo "</textarea>
              <div id=\"error-shipping-custom-field-";
                // line 133
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 133);
                echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 136
            echo "
          ";
            // line 137
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 137) == "file")) {
                // line 138
                echo "            <div class=\"col mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 138)) {
                    echo " required";
                }
                echo " custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 138);
                echo "\">
              <label class=\"form-label\">";
                // line 139
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 139);
                echo "</label>
              <div>
                <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                // line 141
                echo ($context["upload"] ?? null);
                echo "\" data-oc-size-max=\"";
                echo ($context["config_file_max_size"] ?? null);
                echo "\" data-oc-size-error=\"";
                echo ($context["error_upload_size"] ?? null);
                echo "\" data-oc-target=\"#input-shipping-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 141);
                echo "\" class=\"btn btn-light\"><i class=\"fa-solid fa-upload\"></i> ";
                echo ($context["button_upload"] ?? null);
                echo "</button>
                <input type=\"hidden\" name=\"custom_field";
                // line 142
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 142);
                echo "]\" value=\"\" id=\"input-shipping-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 142);
                echo "\"/>
                <div id=\"error-shipping-custom-field-";
                // line 143
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 143);
                echo "\" class=\"invalid-feedback\"></div>
              </div>
            </div>
          ";
            }
            // line 147
            echo "
          ";
            // line 148
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 148) == "date")) {
                // line 149
                echo "            <div class=\"col mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 149)) {
                    echo " required";
                }
                echo " custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 149);
                echo "\">
              <label for=\"input-shipping-custom-field-";
                // line 150
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 150);
                echo "\" class=\"form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 150);
                echo "</label>
              <div class=\"input-group\">
                <input type=\"text\" name=\"custom_field[";
                // line 152
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 152);
                echo "]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 152);
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 152);
                echo "\" id=\"input-shipping-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 152);
                echo "\" class=\"form-control date\"/>
                <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
              </div>
              <div id=\"error-shipping-custom-field-";
                // line 155
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 155);
                echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 158
            echo "
          ";
            // line 159
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 159) == "time")) {
                // line 160
                echo "            <div class=\"col mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 160)) {
                    echo " required";
                }
                echo " custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 160);
                echo "\">
              <label for=\"input-shipping-custom-field-";
                // line 161
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 161);
                echo "\" class=\"form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 161);
                echo "</label>
              <div class=\"input-group\">
                <input type=\"text\" name=\"custom_field[";
                // line 163
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 163);
                echo "]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 163);
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 163);
                echo "\" id=\"input-shipping-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 163);
                echo "\" class=\"form-control time\"/>
                <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
              </div>
              <div id=\"error-shipping-custom-field-";
                // line 166
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 166);
                echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 169
            echo "
          ";
            // line 170
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 170) == "datetime")) {
                // line 171
                echo "            <div class=\"col mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 171)) {
                    echo " required";
                }
                echo " custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 171);
                echo "\">
              <label for=\"input-shipping-custom-field-";
                // line 172
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 172);
                echo "\" class=\"form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 172);
                echo "</label>
              <div class=\"input-group\">
                <input type=\"text\" name=\"custom_field[";
                // line 174
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 174);
                echo "]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 174);
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 174);
                echo "\" id=\"input-shipping-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 174);
                echo "\" class=\"form-control datetime\"/>
                <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
              </div>
              <div id=\"error-shipping-custom-field-";
                // line 177
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 177);
                echo "\" class=\"invalid-feedback\"></div>
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
        echo "
      </div>
      <div class=\"text-end mb-3\">
        <button type=\"submit\" id=\"button-shipping-address\" class=\"btn btn-primary\">";
        // line 185
        echo ($context["button_continue"] ?? null);
        echo "</button>
      </div>
    </form>
  </div>
</fieldset>
<script type=\"text/javascript\"><!--
\$('input[name=\\'shipping_existing\\']').on('change', function () {
    if (\$(this).val() == 1) {
        \$('#shipping-existing').show();
        \$('#shipping-new').hide();
    } else {
        \$('#shipping-existing').hide();
        \$('#shipping-new').show();
    }
});

// Existing Shipping Address
\$('#input-shipping-address').on('change', function () {
    var element = this;

    chain.attach(function () {
        return \$.ajax({
            url: 'index.php?route=checkout/shipping_address.address&language=";
        // line 207
        echo ($context["language"] ?? null);
        echo "&address_id=' + \$(element).val(),
            dataType: 'json',
            beforeSend: function () {
                \$(element).prop('disabled', true);
            },
            complete: function () {
                \$(element).prop('disabled', false);
            },
            success: function (json) {
                console.log(json);

                \$('#input-shipping-address').removeClass('is-invalid');
                \$('#error-shipping-address').removeClass('d-block');

                if (json['redirect']) {
                    location = json['redirect'];
                }

                if (json['error']) {
                    \$('#input-shipping-address').addClass('is-invalid');
                    \$('#error-shipping-address').html(json['error']).addClass('d-block');
                }

                if (json['success']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$('#input-shipping-method').val('');
                    \$('#input-payment-method').val('');

                    \$('#checkout-confirm').load('index.php?route=checkout/confirm.confirm&language=";
        // line 236
        echo ($context["language"] ?? null);
        echo "');
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});

// New Shipping Address
\$('#form-shipping-address').on('submit', function (e) {
    e.preventDefault();

    chain.attach(function () {
        return \$.ajax({
            url: 'index.php?route=checkout/shipping_address.save&language=";
        // line 252
        echo ($context["language"] ?? null);
        echo "',
            type: 'post',
            data: \$('#form-shipping-address').serialize(),
            dataType: 'json',
            contentType: 'application/x-www-form-urlencoded',
            beforeSend: function () {
                \$('#button-shipping-address').button('loading');
            },
            complete: function () {
                \$('#button-shipping-address').button('reset');
            },
            success: function (json) {
                console.log(json);

                \$('#form-shipping-address').find('.is-invalid').removeClass('is-invalid');
                \$('#form-shipping-address').find('.invalid-feedback').removeClass('d-block');

                if (json['redirect']) {
                    location = json['redirect'];
                }

                if (json['error']) {
                    if (json['error']['warning']) {
                        \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                    }

                    for (i in json['error']) {
                        for (key in json['error']) {
                            \$('#input-shipping-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                            \$('#error-shipping-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                        }
                    }
                }

                if (json['success']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$('#form-shipping-address')[0].reset();

                    var html = '<option value=\"\">";
        // line 291
        echo twig_escape_filter($this->env, ($context["text_select"] ?? null), "js");
        echo "</option>';

                    if (json['addresses']) {
                        for (i in json['addresses']) {
                            html += '<option value=\"' + json['addresses'][i]['address_id'] + '\">' + json['addresses'][i]['firstname'] + ' ' + json['addresses'][i]['lastname'] + ', ' + (json['addresses'][i]['company'] ? json['addresses'][i]['company'] + ', ' : '') + json['addresses'][i]['address_1'] + ', ' + json['addresses'][i]['city'] + ', ' + json['addresses'][i]['zone'] + ', ' + json['addresses'][i]['country'] + '</option>';
                        }
                    }

                    // Shipping Address
                    \$('#input-shipping-address').html(html);

                    \$('#input-shipping-address').val(json['address_id']);

                    \$('#shipping-addresses').css({display: 'block'});

                    \$('#input-shipping-existing').trigger('click');

                    // Payment Address
                    var payment_address_id = \$('#input-payment-address').val();

                    \$('#input-payment-address').html(html);

                    if (payment_address_id) {
                        \$('#input-payment-address').val(payment_address_id);
                    }

                    \$('#payment-addresses').css({display: 'block'});

                    \$('#input-payment-existing').trigger('click');

                    \$('#input-shipping-method').val('');
                    \$('#input-payment-method').val('');

                    \$('#checkout-confirm').load('index.php?route=checkout/confirm.confirm&language=";
        // line 324
        echo ($context["language"] ?? null);
        echo "');
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});

\$('#input-shipping-country').on('change', function () {
    var element = this;

    chain.attach(function () {
        return \$.ajax({
            url: 'index.php?route=localisation/country&language=";
        // line 339
        echo ($context["language"] ?? null);
        echo "&country_id=' + \$('#input-shipping-country').val(),
            dataType: 'json',
            beforeSend: function () {
                \$(element).prop('disabled', true);
                \$('#input-shipping-zone').prop('disabled', true);
            },
            complete: function () {
                \$(element).prop('disabled', false);
                \$('#input-shipping-zone').prop('disabled', false);
            },
            success: function (json) {
                if (json['postcode_required'] == '1') {
                    \$('#input-shipping-postcode').parent().addClass('required');
                } else {
                    \$('#input-shipping-postcode').parent().removeClass('required');
                }

                html = '<option value=\"\">";
        // line 356
        echo twig_escape_filter($this->env, ($context["text_select"] ?? null), "js");
        echo "</option>';

                if (json['zone'] && json['zone'] != '') {
                    for (i = 0; i < json['zone'].length; i++) {
                        html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                        if (json['zone'][i]['zone_id'] == '";
        // line 362
        echo ($context["zone_id"] ?? null);
        echo "') {
                            html += ' selected';
                        }

                        html += '>' + json['zone'][i]['name'] + '</option>';
                    }
                } else {
                    html += '<option value=\"0\" selected>";
        // line 369
        echo twig_escape_filter($this->env, ($context["text_none"] ?? null), "js");
        echo "</option>';
                }

                \$('#input-shipping-zone').html(html);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});

\$('#input-shipping-country').trigger('change');
//--></script>
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/checkout/shipping_address.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  896 => 369,  886 => 362,  877 => 356,  857 => 339,  839 => 324,  803 => 291,  761 => 252,  742 => 236,  710 => 207,  685 => 185,  680 => 182,  673 => 180,  667 => 177,  655 => 174,  648 => 172,  639 => 171,  637 => 170,  634 => 169,  628 => 166,  616 => 163,  609 => 161,  600 => 160,  598 => 159,  595 => 158,  589 => 155,  577 => 152,  570 => 150,  561 => 149,  559 => 148,  556 => 147,  549 => 143,  543 => 142,  531 => 141,  526 => 139,  517 => 138,  515 => 137,  512 => 136,  506 => 133,  496 => 132,  490 => 131,  481 => 130,  479 => 129,  476 => 128,  470 => 125,  460 => 124,  454 => 123,  445 => 122,  443 => 121,  440 => 120,  434 => 117,  431 => 116,  420 => 113,  412 => 112,  409 => 111,  405 => 110,  401 => 109,  397 => 108,  388 => 107,  386 => 106,  383 => 105,  377 => 102,  374 => 101,  363 => 98,  355 => 97,  352 => 96,  348 => 95,  344 => 94,  340 => 93,  331 => 92,  329 => 91,  326 => 90,  320 => 87,  317 => 86,  306 => 84,  302 => 83,  298 => 82,  292 => 81,  286 => 80,  277 => 79,  275 => 78,  272 => 77,  268 => 76,  260 => 71,  253 => 66,  238 => 64,  234 => 63,  230 => 62,  225 => 60,  216 => 56,  212 => 55,  205 => 51,  201 => 50,  195 => 47,  191 => 46,  184 => 42,  180 => 41,  174 => 38,  170 => 37,  163 => 33,  159 => 32,  152 => 28,  148 => 27,  137 => 23,  131 => 19,  100 => 17,  96 => 16,  92 => 15,  83 => 13,  77 => 10,  71 => 9,  65 => 6,  59 => 5,  50 => 3,  46 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/checkout/shipping_address.twig", "/Applications/XAMPP/xamppfiles/htdocs/opencart/upload/catalog/view/template/checkout/shipping_address.twig");
    }
}
