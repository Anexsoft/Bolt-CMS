<?php

/* @bolt/editcontent/fielddata/_html.twig */
class __TwigTemplate_32cfa2c86ff47ee792c840a23a73f40234574a094cccb82fe31a6943526cbe87 extends Twig_Template
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
        $__internal_c0aaa6443772c8e2d1b1b2ca51fcf704b00f50518a30895dd01348caf59ccad9 = $this->env->getExtension("native_profiler");
        $__internal_c0aaa6443772c8e2d1b1b2ca51fcf704b00f50518a30895dd01348caf59ccad9->enter($__internal_c0aaa6443772c8e2d1b1b2ca51fcf704b00f50518a30895dd01348caf59ccad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/fielddata/_html.twig"));

        // line 2
        echo "
<script src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/ckeditor/ckeditor.js", "bolt"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_c0aaa6443772c8e2d1b1b2ca51fcf704b00f50518a30895dd01348caf59ccad9->leave($__internal_c0aaa6443772c8e2d1b1b2ca51fcf704b00f50518a30895dd01348caf59ccad9_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/fielddata/_html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 3,  22 => 2,);
    }
}
/* {### Scripts ###}*/
/* */
/* <script src="{{ asset('js/ckeditor/ckeditor.js', 'bolt') }}"></script>*/
/* */
