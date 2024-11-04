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

/* admin/view/template/marketing/affiliate.twig */
class __TwigTemplate_916c6a903658f0bd30cd09180fe919e5 extends Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">

        <button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
        // line 7
        echo ($context["button_filter"] ?? null);
        echo "\" onclick=\"\$('#filter-affiliate').toggleClass('d-none');\" class=\"btn btn-light d-md-none\"><i class=\"fa-solid fa-filter\"></i></button>

        <button type=\"button\" id=\"button-calculate\" data-bs-toggle=\"tooltip\" title=\"";
        // line 9
        echo ($context["button_calculate"] ?? null);
        echo "\" class=\"btn btn-warning\"><i class=\"fa-solid fa-sync\"></i></button>

        <button type=\"submit\" form=\"form-affiliate\" formaction=\"";
        // line 11
        echo ($context["csv"] ?? null);
        echo "\" id=\"button-csv\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_csv"] ?? null);
        echo "\" class=\"btn btn-info\"><i class=\"fa-solid fa-file-csv\"></i></button>

        <button type=\"submit\" form=\"form-affiliate\" formaction=\"";
        // line 13
        echo ($context["complete"] ?? null);
        echo "\" data-oc-toggle=\"ajax\" id=\"button-complete\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_complete"] ?? null);
        echo "\" class=\"btn btn-success\"><i class=\"fa-solid fa-credit-card\"></i></button>

        <a href=\"";
        // line 15
        echo ($context["add"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus\"></i></a>

        <button type=\"submit\" form=\"form-affiliate\" formaction=\"";
        // line 17
        echo ($context["delete"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_delete"] ?? null);
        echo "\" onclick=\"return confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "');\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i></button>

      </div>
      <h1>";
        // line 20
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 23
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 23);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 23);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div id=\"filter-affiliate\" class=\"col-lg-3 col-md-12 order-lg-last d-none d-lg-block mb-3\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-filter\"></i> ";
        // line 32
        echo ($context["text_filter"] ?? null);
        echo "</div>
          <div class=\"card-body\">
            <div class=\"mb-3\">
              <label class=\"form-label\">";
        // line 35
        echo ($context["entry_customer"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_customer\" value=\"";
        // line 36
        echo ($context["filter_customer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_customer"] ?? null);
        echo "\" id=\"input-customer\" data-oc-target=\"autocomplete-customer\" class=\"form-control\" autocomplete=\"off\"/>
              <ul id=\"autocomplete-customer\" class=\"dropdown-menu\"></ul>
            </div>
            <div class=\"mb-3\">
              <label for=\"input-tracking\" class=\"form-label\">";
        // line 40
        echo ($context["entry_tracking"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_tracking\" value=\"";
        // line 41
        echo ($context["filter_tracking"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_tracking"] ?? null);
        echo "\" id=\"input-tracking\" class=\"form-control\"/>
            </div>
            <div class=\"mb-3\">
              <label for=\"input-payment-method\" class=\"form-label\">";
        // line 44
        echo ($context["entry_payment_method"] ?? null);
        echo "</label>
              <select name=\"filter_payment_method\" id=\"input-payment-method\" class=\"form-select\">
                <option value=\"\"></option>
                ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["payment_methods"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["payment_method"]) {
            // line 48
            echo "                  <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "value", [], "any", false, false, false, 48);
            echo "\"";
            if ((($context["filter_payment_method"] ?? null) == twig_get_attribute($this->env, $this->source, $context["payment_method"], "value", [], "any", false, false, false, 48))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "text", [], "any", false, false, false, 48);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment_method'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "              </select>
            </div>
            <div class=\"mb-3\">
              <label for=\"input-commission\" class=\"form-label\">";
        // line 53
        echo ($context["entry_commission"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_commission\" value=\"";
        // line 54
        echo ($context["filter_commission"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_commission"] ?? null);
        echo "\" id=\"input-commission\" class=\"form-control\"/>
            </div>
            <div class=\"mb-3\">
              <label for=\"input-date-from\" class=\"form-label\">";
        // line 57
        echo ($context["entry_date_from"] ?? null);
        echo "</label>
              <div class=\"input-group\">
                <input type=\"text\" name=\"filter_date_from\" value=\"";
        // line 59
        echo ($context["filter_date_from"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_from"] ?? null);
        echo "\" id=\"input-date-from\" class=\"form-control date\"/>
                <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
              </div>
            </div>
            <div class=\"mb-3\">
              <label for=\"input-date-to\" class=\"form-label\">";
        // line 64
        echo ($context["entry_date_to"] ?? null);
        echo "</label>
              <div class=\"input-group\">
                <input type=\"text\" name=\"filter_date_to\" value=\"";
        // line 66
        echo ($context["filter_date_to"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_to"] ?? null);
        echo "\" id=\"input-date-to\" class=\"form-control date\"/>
                <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
              </div>
            </div>
            <div class=\"mb-3\">
              <label for=\"input-status\" class=\"form-label\">";
        // line 71
        echo ($context["entry_status"] ?? null);
        echo "</label>
              <select name=\"filter_status\" id=\"input-status\" class=\"form-select\">
                <option value=\"\"></option>
                <option value=\"1\"";
        // line 74
        if ((($context["filter_status"] ?? null) == "1")) {
            echo " selected";
        }
        echo ">";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
                <option value=\"0\"";
        // line 75
        if ((($context["filter_status"] ?? null) == "0")) {
            echo " selected";
        }
        echo ">";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
              </select>
            </div>
            <div class=\"mb-3\">
              <label for=\"input-limit\" class=\"form-label\">";
        // line 79
        echo ($context["entry_limit"] ?? null);
        echo "</label>
              <select name=\"limit\" id=\"input-limit\" class=\"form-select\">
                ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["limits"]);
        foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
            // line 82
            echo "                  <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 82);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 82) == ($context["limit"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 82);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "              </select>
            </div>
            <div class=\"text-end\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-light\"><i class=\"fa-solid fa-filter\"></i> ";
        // line 87
        echo ($context["button_filter"] ?? null);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-lg-9 col-md-12\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-list\"></i> ";
        // line 94
        echo ($context["text_list"] ?? null);
        echo "</div>
          <div id=\"affiliate\" class=\"card-body\">";
        // line 95
        echo ($context["list"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#affiliate').on('click', 'thead a, .pagination a', function(e) {
    e.preventDefault();

    \$('#affiliate').load(this.href);
});

\$('#button-filter').on('click', function() {
    url = '';

    var filter_customer = \$('#input-customer').val();

    if (filter_customer) {
        url += '&filter_customer=' + encodeURIComponent(filter_customer);
    }

    var filter_tracking = \$('#input-tracking').val();

    if (filter_tracking) {
        url += '&filter_tracking=' + encodeURIComponent(filter_tracking);
    }

    var filter_payment_method = \$('#input-payment-method').val();

    if (filter_payment_method) {
        url += '&filter_payment_method=' + filter_payment_method;
    }

    var filter_commission = \$('#input-commission').val();

    if (filter_commission) {
        url += '&filter_commission=' + filter_commission;
    }

    var filter_date_from = \$('#input-date-from').val();

    if (filter_date_from) {
        url += '&filter_date_from=' + encodeURIComponent(filter_date_from);
    }

    var filter_date_to = \$('#input-date-to').val();

    if (filter_date_to) {
        url += '&filter_date_to=' + encodeURIComponent(filter_date_to);
    }

    var filter_status = \$('#input-status').val();

    if (filter_status !== '') {
        url += '&filter_status=' + filter_status;
    }

    var limit = \$('#input-limit').val();

    if (limit) {
        url += '&limit=' + limit;
    }

    window.history.pushState({}, null, 'index.php?route=marketing/affiliate&user_token=";
        // line 159
        echo ($context["user_token"] ?? null);
        echo "' + url);

    \$('#affiliate').load('index.php?route=marketing/affiliate.list&user_token=";
        // line 161
        echo ($context["user_token"] ?? null);
        echo "' + url);
});

\$('#input-customer').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=customer/customer.autocomplete&user_token=";
        // line 167
        echo ($context["user_token"] ?? null);
        echo "&filter_affiliate=1&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['customer_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-customer').val(item['label']);
    }
});

\$('#button-calculate').on('click', function (e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=marketing/affiliate.calculate&user_token=";
        // line 190
        echo ($context["user_token"] ?? null);
        echo "',
        dataType: 'json',
        beforeSend: function () {
            \$(element).button('loading');
        },
        complete: function () {
            \$(element).button('reset');
        },
        success: function (json) {
            console.log(json);

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                url = '';

                var filter_customer = \$('#input-customer').val();

                if (filter_customer) {
                    url += '&filter_customer=' + encodeURIComponent(filter_customer);
                }

                var filter_tracking = \$('#input-tracking').val();

                if (filter_tracking) {
                    url += '&filter_tracking=' + encodeURIComponent(filter_tracking);
                }

                var filter_payment_method = \$('#input-payment-method').val();

                if (filter_payment_method) {
                    url += '&filter_payment_method=' + filter_payment_method;
                }

                var filter_commission = \$('#input-commission').val();

                if (filter_commission) {
                    url += '&filter_commission=' + filter_commission;
                }

                var filter_date_from = \$('#input-date-from').val();

                if (filter_date_from) {
                    url += '&filter_date_from=' + encodeURIComponent(filter_date_from);
                }

                var filter_date_to = \$('#input-date-to').val();

                if (filter_date_to) {
                    url += '&filter_date_to=' + encodeURIComponent(filter_date_to);
                }

                var filter_status = \$('#input-status').val();

                if (filter_status !== '') {
                    url += '&filter_status=' + filter_status;
                }

                var limit = \$('#input-limit').val();

                if (limit) {
                    url += '&limit=' + limit;
                }

                \$('#affiliate').load('index.php?route=marketing/affiliate.list&user_token=";
        // line 258
        echo ($context["user_token"] ?? null);
        echo "' + url);
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
";
        // line 267
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/view/template/marketing/affiliate.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  478 => 267,  466 => 258,  395 => 190,  369 => 167,  360 => 161,  355 => 159,  288 => 95,  284 => 94,  274 => 87,  269 => 84,  254 => 82,  250 => 81,  245 => 79,  234 => 75,  226 => 74,  220 => 71,  210 => 66,  205 => 64,  195 => 59,  190 => 57,  182 => 54,  178 => 53,  173 => 50,  158 => 48,  154 => 47,  148 => 44,  140 => 41,  136 => 40,  127 => 36,  123 => 35,  117 => 32,  108 => 25,  97 => 23,  93 => 22,  88 => 20,  78 => 17,  71 => 15,  64 => 13,  57 => 11,  52 => 9,  47 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/marketing/affiliate.twig", "/Applications/XAMPP/xamppfiles/htdocs/opencart/upload/admin/view/template/marketing/affiliate.twig");
    }
}
