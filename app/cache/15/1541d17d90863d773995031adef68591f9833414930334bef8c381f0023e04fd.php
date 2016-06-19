<?php

/* @bolt/editcontent/_aside-save.twig */
class __TwigTemplate_b3cf878384e0a0830420b2e33c1c65b50c1476d622bed7ce4ca94c9440bab524 extends Twig_Template
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
        $__internal_83268f75614f570860da6fdc4bb4ed3ea5985db9d5acf815a9b00092f31cea24 = $this->env->getExtension("native_profiler");
        $__internal_83268f75614f570860da6fdc4bb4ed3ea5985db9d5acf815a9b00092f31cea24->enter($__internal_83268f75614f570860da6fdc4bb4ed3ea5985db9d5acf815a9b00092f31cea24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/_aside-save.twig"));

        // line 1
        echo "<div class=\"btn-group\">
    <button type=\"button\" class=\"btn btn-primary\" id=\"sidebarsavecontinuebutton\">
        <i class=\"fa fa-flag\"></i> ";
        // line 3
        echo $this->env->getExtension('Bolt')->trans("contenttypes.generic.save", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array())));
        echo "
    </button>

    <button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\">
        <span class=\"caret\"></span>
        <span class=\"sr-only\">Toggle Dropdown</span>
    </button>

    <ul class=\"dropdown-menu\" role=\"menu\">
        <li>
            <button type=\"submit\" class=\"btn btn-link\" id=\"sidebarsavebutton\">
                <i class=\"fa fa-flag\"></i> ";
        // line 14
        echo $this->env->getExtension('Bolt')->trans("general.phrase.save-and-return-overview");
        echo "
            </button>
        </li>

        <li>
            <button type=\"submit\" class=\"btn btn-link\" id=\"sidebarsavenewbutton\">
                <i class=\"fa fa-flag\"></i> ";
        // line 20
        echo $this->env->getExtension('Bolt')->trans("general.phrase.save-and-create-new-record");
        echo "
            </button>
        </li>
    </ul>
</div>
";
        
        $__internal_83268f75614f570860da6fdc4bb4ed3ea5985db9d5acf815a9b00092f31cea24->leave($__internal_83268f75614f570860da6fdc4bb4ed3ea5985db9d5acf815a9b00092f31cea24_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/_aside-save.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 20,  40 => 14,  26 => 3,  22 => 1,);
    }
}
/* <div class="btn-group">*/
/*     <button type="button" class="btn btn-primary" id="sidebarsavecontinuebutton">*/
/*         <i class="fa fa-flag"></i> {{ __('contenttypes.generic.save', {'%contenttype%': context.contenttype.slug}) }}*/
/*     </button>*/
/* */
/*     <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">*/
/*         <span class="caret"></span>*/
/*         <span class="sr-only">Toggle Dropdown</span>*/
/*     </button>*/
/* */
/*     <ul class="dropdown-menu" role="menu">*/
/*         <li>*/
/*             <button type="submit" class="btn btn-link" id="sidebarsavebutton">*/
/*                 <i class="fa fa-flag"></i> {{ __('general.phrase.save-and-return-overview') }}*/
/*             </button>*/
/*         </li>*/
/* */
/*         <li>*/
/*             <button type="submit" class="btn btn-link" id="sidebarsavenewbutton">*/
/*                 <i class="fa fa-flag"></i> {{ __('general.phrase.save-and-create-new-record') }}*/
/*             </button>*/
/*         </li>*/
/*     </ul>*/
/* </div>*/
/* */
