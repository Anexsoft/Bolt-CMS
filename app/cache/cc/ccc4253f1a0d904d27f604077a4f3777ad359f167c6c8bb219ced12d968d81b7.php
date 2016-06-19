<?php

/* @bolt/firstuser/firstuser.twig */
class __TwigTemplate_f5f1861685c6215ef8dc1504e9a6af502465ebcf6c72e67fcfc6c486463f27d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("@bolt/_base/_page-no_nav.twig", "@bolt/firstuser/firstuser.twig", 3);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'page_main' => array($this, 'block_page_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@bolt/_base/_page-no_nav.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3060b05615ed4c1d98ebe89c28e63e2a1b04f94eaf5f69a2befe0b9081a5eb48 = $this->env->getExtension("native_profiler");
        $__internal_3060b05615ed4c1d98ebe89c28e63e2a1b04f94eaf5f69a2befe0b9081a5eb48->enter($__internal_3060b05615ed4c1d98ebe89c28e63e2a1b04f94eaf5f69a2befe0b9081a5eb48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/firstuser/firstuser.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3060b05615ed4c1d98ebe89c28e63e2a1b04f94eaf5f69a2befe0b9081a5eb48->leave($__internal_3060b05615ed4c1d98ebe89c28e63e2a1b04f94eaf5f69a2befe0b9081a5eb48_prof);

    }

    // line 5
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_b0ee08fd1ce44280ae25080bb3f65cc2e41ffa6eeaf951c486b52e5ade327dab = $this->env->getExtension("native_profiler");
        $__internal_b0ee08fd1ce44280ae25080bb3f65cc2e41ffa6eeaf951c486b52e5ade327dab->enter($__internal_b0ee08fd1ce44280ae25080bb3f65cc2e41ffa6eeaf951c486b52e5ade327dab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo $this->env->getExtension('Bolt')->trans("general.phrase.create-user-first");
        
        $__internal_b0ee08fd1ce44280ae25080bb3f65cc2e41ffa6eeaf951c486b52e5ade327dab->leave($__internal_b0ee08fd1ce44280ae25080bb3f65cc2e41ffa6eeaf951c486b52e5ade327dab_prof);

    }

    // line 7
    public function block_page_main($context, array $blocks = array())
    {
        $__internal_0799861b7d5317adc87273f24ba3a2e42d2e47e9f65e3fa26feba388e6ee6a79 = $this->env->getExtension("native_profiler");
        $__internal_0799861b7d5317adc87273f24ba3a2e42d2e47e9f65e3fa26feba388e6ee6a79->enter($__internal_0799861b7d5317adc87273f24ba3a2e42d2e47e9f65e3fa26feba388e6ee6a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_main"));

        // line 8
        echo "
    ";
        // line 9
        $this->env->getExtension('form')->renderer->setTheme($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "form", array()), array(0 => "form_bolt_layout.twig"));
        // line 10
        echo "
    <p class=\"first-user\">
        ";
        // line 12
        echo $this->env->getExtension('Bolt')->trans("general.phrase.users-none-create-first-extended");
        echo "
    </p>

    <form method=\"post\" class=\"form-horizontal submitspinner\" autocomplete=\"off\">
        ";
        // line 18
        echo "        <input type=\"text\" style=\"display:none;\" />
        <input type=\"password\" style=\"display:none;\" />

        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "form", array()), 'widget');
        echo "

        <button type=\"submit\" class=\"btn btn-primary\" name=\"submit\" value=\"login\">
            <i class=\"fa fa-sign-in fa-fw\"></i> ";
        // line 24
        echo $this->env->getExtension('Bolt')->trans("general.phrase.create-user-first");
        echo "
        </button>
    </form>

    ";
        // line 28
        if ( !twig_test_empty($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "note", array()))) {
            // line 29
            echo "        <p class=\"alert alert-info\" style=\"max-width: 550px; margin-top:10px;\">
            <strong>";
            // line 30
            echo $this->env->getExtension('Bolt')->trans("general.phrase.note-colon");
            echo "</strong> ";
            echo $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "note", array());
            echo "
        </p>
    ";
        }
        // line 33
        echo "
    <div class=\"progress\" id=\"progress-wrapper\">
        <div id=\"complexity-bar\" class=\"progress-bar progress-bar-success\" role=\"progressbar\" style=\"width: 0;\"></div>
    </div>

    <script type=\"text/javascript\">
        \$(function() {
            // Attach and detach the progressbar.
            var el = \$('#progress-wrapper').detach()
            \$('#form_password').parent().append(el);

            // Initialize complexify, to indicate password strength.
            \$('#form_password').complexify({'strengthScaleFactor': 0.6, 'minimumChars': 6}, function (valid, complexity) {
                var progressBar = \$('#complexity-bar');
                progressBar.toggleClass('progress-bar-danger', (complexity < 40 ));
                progressBar.toggleClass('progress-bar-warning', (complexity < 50 ));
                progressBar.toggleClass('progress-bar-success', (complexity > 60 ));
                progressBar.css({'width': complexity + '%'});
            });
        });
    </script>

";
        
        $__internal_0799861b7d5317adc87273f24ba3a2e42d2e47e9f65e3fa26feba388e6ee6a79->leave($__internal_0799861b7d5317adc87273f24ba3a2e42d2e47e9f65e3fa26feba388e6ee6a79_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/firstuser/firstuser.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 33,  92 => 30,  89 => 29,  87 => 28,  80 => 24,  74 => 21,  69 => 18,  62 => 12,  58 => 10,  56 => 9,  53 => 8,  47 => 7,  35 => 5,  11 => 3,);
    }
}
/* {# Page: Create the first User #}*/
/* */
/* {% extends '@bolt/_base/_page-no_nav.twig' %}*/
/* */
/* {% block page_title __('general.phrase.create-user-first') %}*/
/* */
/* {% block page_main %}*/
/* */
/*     {% form_theme context.form 'form_bolt_layout.twig' %}*/
/* */
/*     <p class="first-user">*/
/*         {{ __('general.phrase.users-none-create-first-extended') }}*/
/*     </p>*/
/* */
/*     <form method="post" class="form-horizontal submitspinner" autocomplete="off">*/
/*         {# Google Chrome, Firefox, MS edge all require this trick to prevent password fields from auto-filling.*/
/*            @see http://stackoverflow.com/questions/15738259/disabling-chrome-autofill #}*/
/*         <input type="text" style="display:none;" />*/
/*         <input type="password" style="display:none;" />*/
/* */
/*         {{ form_widget(context.form) }}*/
/* */
/*         <button type="submit" class="btn btn-primary" name="submit" value="login">*/
/*             <i class="fa fa-sign-in fa-fw"></i> {{ __('general.phrase.create-user-first') }}*/
/*         </button>*/
/*     </form>*/
/* */
/*     {% if context.note is not empty %}*/
/*         <p class="alert alert-info" style="max-width: 550px; margin-top:10px;">*/
/*             <strong>{{ __('general.phrase.note-colon') }}</strong> {{ context.note|raw }}*/
/*         </p>*/
/*     {% endif %}*/
/* */
/*     <div class="progress" id="progress-wrapper">*/
/*         <div id="complexity-bar" class="progress-bar progress-bar-success" role="progressbar" style="width: 0;"></div>*/
/*     </div>*/
/* */
/*     <script type="text/javascript">*/
/*         $(function() {*/
/*             // Attach and detach the progressbar.*/
/*             var el = $('#progress-wrapper').detach()*/
/*             $('#form_password').parent().append(el);*/
/* */
/*             // Initialize complexify, to indicate password strength.*/
/*             $('#form_password').complexify({'strengthScaleFactor': 0.6, 'minimumChars': 6}, function (valid, complexity) {*/
/*                 var progressBar = $('#complexity-bar');*/
/*                 progressBar.toggleClass('progress-bar-danger', (complexity < 40 ));*/
/*                 progressBar.toggleClass('progress-bar-warning', (complexity < 50 ));*/
/*                 progressBar.toggleClass('progress-bar-success', (complexity > 60 ));*/
/*                 progressBar.css({'width': complexity + '%'});*/
/*             });*/
/*         });*/
/*     </script>*/
/* */
/* {% endblock page_main %}*/
/* */
