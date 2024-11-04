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

/* admin/view/template/marketplace/installer.twig */
class __TwigTemplate_da1bef07c5113e4d7eb517a0306cbf81 extends Template
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
      <div class=\"float-end\"><button type=\"button\" id=\"button-upload\" data-bs-toggle=\"tooltip\" title=\"";
        // line 5
        echo ($context["button_upload"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i></button></div>
      <h1>";
        // line 6
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 9);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 9);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-puzzle-piece\"></i> ";
        // line 16
        echo ($context["heading_title"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <fieldset>
          <legend>";
        // line 19
        echo ($context["text_progress"] ?? null);
        echo "</legend>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\">";
        // line 21
        echo ($context["entry_progress"] ?? null);
        echo "</label>
            <div class=\"col-sm-10 mt-2\">
              <div class=\"progress\">
                <div id=\"progress-bar\" class=\"progress-bar\" style=\"width: 0%;\"></div>
              </div>
              <div id=\"progress-text\"></div>
            </div>
          </div>
        </fieldset>
        <fieldset>
          <legend>";
        // line 31
        echo ($context["text_installed"] ?? null);
        echo "</legend>
          <div id=\"extension\">";
        // line 32
        echo ($context["list"] ?? null);
        echo "</div>
        </fieldset>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#extension').on('click', 'thead a, .pagination a', function (e) {
    e.preventDefault();

    \$('#extension').load(this.href);
});

// Upload
\$('#button-upload').on('click', function () {
    var element = this;

    if (!\$('#button-upload').prop('disabled')) {
        \$('#form-upload').remove();

        \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\"/></form>');

        \$('#form-upload input[name=\\'file\\']').trigger('click');

        \$('#form-upload input[name=\\'file\\']').on('change', function () {
            if ((this.files[0].size / 1024) > ";
        // line 57
        echo ($context["config_file_max_size"] ?? null);
        echo ") {
                \$(this).val('');

                alert('";
        // line 60
        echo ($context["error_upload_size"] ?? null);
        echo "');
            }

            if (!this.files[0].name.endsWith('.ocmod.zip')) {
                \$(this).val('');

                alert('";
        // line 66
        echo ($context["error_filetype"] ?? null);
        echo "');
            }
        });

        if (typeof timer != 'undefined') {
            clearInterval(timer);
        }

        timer = setInterval(function () {
            if (\$('#form-upload input[name=\\'file\\']').val() !== '') {
                clearInterval(timer);

                \$.ajax({
                    url: 'index.php?route=marketplace/installer.upload&user_token=";
        // line 79
        echo ($context["user_token"] ?? null);
        echo "',
                    type: 'post',
                    data: new FormData(\$('#form-upload')[0]),
                    dataType: 'json',
                    cache: false,
                    contentType: false,
                    processData: false,
                    beforeSend: function () {
                        \$(element).button('loading');
                    },
                    complete: function () {
                        \$(element).button('reset');
                    },
                    success: function (json) {
                        if (json['error']) {
                            \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                        }

                        if (json['success']) {
                            \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                            \$('#extension').load('index.php?route=marketplace/installer.list&user_token=";
        // line 100
        echo ($context["user_token"] ?? null);
        echo "');
                        }
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        }, 500);
    }
});

// Install
\$('#extension').on('click', '.btn-success, .btn-warning', function (e) {
    e.preventDefault();

    var element = this;

    \$(element).button('loading');

    var next = \$(element).attr('href');

    \$('#progress-bar').removeClass('bg-danger bg-success').css('width', '0%');
    \$('#progress-text').html('');

    var installer = function () {
        return \$.ajax({
            url: next,
            dataType: 'json',
            success: function (json) {
                console.log(json);

                \$('.alert-dismissible').remove();

                if (json['error']) {
                    \$('#progress-bar').addClass('bg-danger');
                    \$('#progress-text').html('<div class=\"text-danger\">' + json['error'] + '</div>');

                    \$(element).button('reset');
                }

                if (json['text']) {
                    \$('#progress-bar').addClass('bg-success');
                    \$('#progress-text').html('<div class=\"text-success\">' + json['text'] + '</div>');
                }

                if (json['success']) {
                    \$('#progress-bar').addClass('bg-success').css('width', '100%');
                    \$('#progress-text').html('<div class=\"text-success\">' + json['success'] + '</div>');

                    \$(element).button('reset');

                    \$('#extension').load('index.php?route=marketplace/installer.list&user_token=";
        // line 152
        echo ($context["user_token"] ?? null);
        echo "');
                }

                if (json['next']) {
                    next = json['next'];

                    chain.attach(installer);
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);

                \$(element).button('reset');
            }
        });
    };

    chain.attach(installer);
});

// Delete
\$('#extension').on('click', '.btn-danger', function (e) {
    e.preventDefault();

    var element = this;

    if (confirm('";
        // line 178
        echo ($context["text_confirm"] ?? null);
        echo "')) {
        \$.ajax({
            url: \$(element).attr('href'),
            dataType: 'json',
            beforeSend: function () {
                \$(element).button('loading');
            },
            complete: function () {
                \$(element).button('reset');
            },
            success: function (json) {
                console.log(json);

                \$('.alert-dismissible').remove();

                if (json['error']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                if (json['success']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$('#extension').load('index.php?route=marketplace/installer.list&user_token=";
        // line 200
        echo ($context["user_token"] ?? null);
        echo "');
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    }
});
//--></script>
";
        // line 210
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/view/template/marketplace/installer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 210,  296 => 200,  271 => 178,  242 => 152,  187 => 100,  163 => 79,  147 => 66,  138 => 60,  132 => 57,  104 => 32,  100 => 31,  87 => 21,  82 => 19,  76 => 16,  69 => 11,  58 => 9,  54 => 8,  49 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/marketplace/installer.twig", "/Applications/XAMPP/xamppfiles/htdocs/opencart/upload/admin/view/template/marketplace/installer.twig");
    }
}
