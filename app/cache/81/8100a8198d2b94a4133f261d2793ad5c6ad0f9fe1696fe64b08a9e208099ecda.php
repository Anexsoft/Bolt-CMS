<?php

/* @bolt/editcontent/_aside-delete.twig */
class __TwigTemplate_f5fb77ade35485e5587284f0e94ef66189834103329cbe534cfeaee19b25a103 extends Twig_Template
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
        $__internal_ee21f455e9962cefac41ec9feac89801eec4bbc0830d17b92cad538358d8f959 = $this->env->getExtension("native_profiler");
        $__internal_ee21f455e9962cefac41ec9feac89801eec4bbc0830d17b92cad538358d8f959->enter($__internal_ee21f455e9962cefac41ec9feac89801eec4bbc0830d17b92cad538358d8f959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/_aside-delete.twig"));

        // line 1
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->addData("editcontent.delete", $this->env->getExtension('Bolt')->trans("Are you sure you wish to delete this record? There is no undo.")), "html", null, true);
        echo "

<div class=\"btn-group\">
    <button type=\"button\" class=\"btn btn-silent-danger\" id=\"sidebardeletebutton\">
        <i class=\"fa fa-trash\"></i> ";
        // line 5
        echo $this->env->getExtension('Bolt')->trans("contenttypes.generic.delete", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array())));
        echo "
    </button>

</div>
";
        
        $__internal_ee21f455e9962cefac41ec9feac89801eec4bbc0830d17b92cad538358d8f959->leave($__internal_ee21f455e9962cefac41ec9feac89801eec4bbc0830d17b92cad538358d8f959_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/_aside-delete.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 5,  22 => 1,);
    }
}
/* {{ data('editcontent.delete', __('Are you sure you wish to delete this record? There is no undo.')) }}*/
/* */
/* <div class="btn-group">*/
/*     <button type="button" class="btn btn-silent-danger" id="sidebardeletebutton">*/
/*         <i class="fa fa-trash"></i> {{ __('contenttypes.generic.delete', {'%contenttype%': context.contenttype.slug}) }}*/
/*     </button>*/
/* */
/* </div>*/
/* */
