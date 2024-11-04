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

/* install/view/template/upgrade/upgrade.twig */
class __TwigTemplate_9c7fefa5d21884b3921b993d6329d2ba extends Template
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
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container\">
      <div class=\"float-right\">";
        // line 5
        echo ($context["language"] ?? null);
        echo "</div>
      <h1>";
        // line 6
        echo ($context["heading_title"] ?? null);
        echo "</h1>
    </div>
  </div>
  <div class=\"container\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fab fa-opencart\"></i>&nbsp;&nbsp;";
        // line 11
        echo ($context["text_upgrade"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <fieldset>
          <legend>";
        // line 14
        echo ($context["text_server"] ?? null);
        echo "</legend>
          <ol>
            <li>";
        // line 16
        echo ($context["text_error"] ?? null);
        echo "</li>
            <li>";
        // line 17
        echo ($context["text_clear"] ?? null);
        echo "</li>
            <li>";
        // line 18
        echo ($context["text_refresh"] ?? null);
        echo "</li>
            <li>";
        // line 19
        echo ($context["text_user"] ?? null);
        echo "</li>
            <li>";
        // line 20
        echo ($context["text_setting"] ?? null);
        echo "</li>
            <li>";
        // line 21
        echo ($context["text_store"] ?? null);
        echo "</li>
          </ol>
        </fieldset>
        <fieldset>
          <legend>";
        // line 25
        echo ($context["text_admin"] ?? null);
        echo "</legend>
          <div class=\"mb-3\">
            <label class=\"form-label\">";
        // line 27
        echo ($context["entry_admin"] ?? null);
        echo "</label>
            <div class=\"input-group\">
              <div class=\"input-group-text\">";
        // line 29
        echo ($context["server"] ?? null);
        echo "</div>
              <input type=\"text\" name=\"admin\" value=\"admin\" id=\"input-admin\" class=\"form-control\">
            </div>
          </div>
        </fieldset>
        <fieldset>
          <legend>";
        // line 35
        echo ($context["text_steps"] ?? null);
        echo "</legend>
          <div class=\"mb-3\">
            <label class=\"form-label\">";
        // line 37
        echo ($context["entry_progress"] ?? null);
        echo "</label>
            <div class=\"progress\">
              <div id=\"progress-bar\" class=\"progress-bar\" style=\"width: 0%;\"></div>
            </div>
            <div id=\"progress-text\"></div>
          </div>
        </fieldset>
        <div class=\"row\">
          <div class=\"col text-end\"><button type=\"button\" id=\"button-continue\" data-loading=\"";
        // line 45
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</button></div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-continue').on('click', function () {
    var element = this;

    var step = 1;

    \$(element).prop('disabled', true);

    \$('#progress-bar').addClass('progress-bar-success').css('width', '0%').removeClass('progress-bar-danger');
    \$('#progress-text').html('');

    var next = 'index.php?route=upgrade/upgrade_1&admin=' + \$('#input-admin').val();

    var upgrade = function () {
        return \$.ajax({
            url: next,
            dataType: 'json',
            success: function (json) {
                console.log(json);

                if (json['redirect']) {
                    location = json['redirect'];
                }

                if (json['error']) {
                    \$('#progress-bar').addClass('progress-bar-danger');
                    \$('#progress-text').html('<div class=\"text-danger\">' + json['error'] + '</div>');

                    \$(element).prop('disabled', false);
                }

                if (json['text']) {
                    \$('#progress-text').html('<span class=\"text-success\">' + json['text'] + '</span>');
                }

                if (json['success']) {
                    \$('#progress-text').html('<span class=\"text-success\">' + json['success'] + '</span>');

                    \$(element).prop('disabled', false);
                }

                \$('#progress-bar').css('width', Math.round((step / ";
        // line 92
        echo ($context["total"] ?? null);
        echo ") * 100) + '%');

                step++;

                if (json['next']) {
                    next = json['next'];

                    chain.attach(upgrade);
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);

                \$(element).prop('disabled', false);
            }
        });
    }

    chain.attach(upgrade);
});
//--></script>
";
        // line 113
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "install/view/template/upgrade/upgrade.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 113,  181 => 92,  129 => 45,  118 => 37,  113 => 35,  104 => 29,  99 => 27,  94 => 25,  87 => 21,  83 => 20,  79 => 19,  75 => 18,  71 => 17,  67 => 16,  62 => 14,  56 => 11,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "install/view/template/upgrade/upgrade.twig", "/Applications/XAMPP/xamppfiles/htdocs/opencart/upload/install/view/template/upgrade/upgrade.twig");
    }
}
