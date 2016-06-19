<?php

/* partials/_fresh_install.twig */
class __TwigTemplate_2d1a48154ce8d51cae790e8b0aaec452a53c85ac93e1385264f0490584e16de9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a7f6895db7a3fc9bf58864bcac85691a2f3faa2778bce53e0f8812504616f532 = $this->env->getExtension("native_profiler");
        $__internal_a7f6895db7a3fc9bf58864bcac85691a2f3faa2778bce53e0f8812504616f532->enter($__internal_a7f6895db7a3fc9bf58864bcac85691a2f3faa2778bce53e0f8812504616f532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partials/_fresh_install.twig"));

        // line 1
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 2
            echo "    <div class=\"primary callout\" data-closable>
        <h5>Welcome to the Bolt Foundation theme. </h5>
        <p>This is a bland theme, with a modular structure. It is well suited to build your own theme's on top of.</p>
        <ul>
            <li>Check the <a href='https://github.com/bobdenotter/bolt-foundation-theme/blob/master/readme.md'>readme.md</a> for instructions on how to customize this theme.</li>
            <li>View the <a href='";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root", array()), "html", null, true);
            echo "styleguide'>Styleguide</a> for this theme.</li>
            <li>Read the <a href='http://foundation.zurb.com/sites/docs/'>Foundation for Sites</a> documentation.</li>
            <li><a href='";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fileedit", array("namespace" => "themes", "file" => "base-2016/index.twig")), "html", null, true);
            echo "'>Edit this template</a>, to get rid of this 'callout'.</li>
        </ul>
        <small>Note: Only registered users will see this. This piece of content is hidden from regular visitors.</small>
        <button class=\"close-button\" aria-label=\"Dismiss alert\" type=\"button\" data-close>
            <span aria-hidden=\"true\">&times;</span>
        </button>
    </div>
";
        }
        
        $__internal_a7f6895db7a3fc9bf58864bcac85691a2f3faa2778bce53e0f8812504616f532->leave($__internal_a7f6895db7a3fc9bf58864bcac85691a2f3faa2778bce53e0f8812504616f532_prof);

    }

    public function getTemplateName()
    {
        return "partials/_fresh_install.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 9,  31 => 7,  24 => 2,  22 => 1,);
    }
}
/* {% if user %}*/
/*     <div class="primary callout" data-closable>*/
/*         <h5>Welcome to the Bolt Foundation theme. </h5>*/
/*         <p>This is a bland theme, with a modular structure. It is well suited to build your own theme's on top of.</p>*/
/*         <ul>*/
/*             <li>Check the <a href='https://github.com/bobdenotter/bolt-foundation-theme/blob/master/readme.md'>readme.md</a> for instructions on how to customize this theme.</li>*/
/*             <li>View the <a href='{{ paths.root }}styleguide'>Styleguide</a> for this theme.</li>*/
/*             <li>Read the <a href='http://foundation.zurb.com/sites/docs/'>Foundation for Sites</a> documentation.</li>*/
/*             <li><a href='{{ path('fileedit', {'namespace': 'themes', 'file': 'base-2016/index.twig'}) }}'>Edit this template</a>, to get rid of this 'callout'.</li>*/
/*         </ul>*/
/*         <small>Note: Only registered users will see this. This piece of content is hidden from regular visitors.</small>*/
/*         <button class="close-button" aria-label="Dismiss alert" type="button" data-close>*/
/*             <span aria-hidden="true">&times;</span>*/
/*         </button>*/
/*     </div>*/
/* {% endif %}*/
/* */
