<?php

/* @bolt/editcontent/data/_uploads.twig */
class __TwigTemplate_34c460ab51c9e2d0383077a8cb6cb23c2463c30d8691b82420280bd85dbdc054 extends Twig_Template
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
        $__internal_23d349d07a5fd0b797eb13453fffd676ccfa890df25462c218554ff97ba045ca = $this->env->getExtension("native_profiler");
        $__internal_23d349d07a5fd0b797eb13453fffd676ccfa890df25462c218554ff97ba045ca->enter($__internal_23d349d07a5fd0b797eb13453fffd676ccfa890df25462c218554ff97ba045ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/data/_uploads.twig"));

        // line 2
        echo "
";
        // line 3
        $context["template_upload_error"] = ('' === $tmp = "    <p>There was an error uploading the file. Make sure the file is not corrupt,
    and that the upload-folder is writable.</p>
    <p>Error message:<br><i>%ERROR%<i></p>
") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->addData("field.uploads.template.error", $this->env->getExtension('Bolt')->pregReplace(trim((isset($context["template_upload_error"]) ? $context["template_upload_error"] : null)), "/>\\s+</", "><")), "html", null, true);
        echo "

";
        // line 12
        echo "
";
        // line 13
        $context["template_upload_too_large"] = ('' === $tmp = "    <p>File is too large:</p>
    <table>
        <tr><th>Name: </th><td>%FILENAME%</td></tr>
        <tr><th>Size: </th><td>%FILESIZE%</td></tr>
        <tr><th>Maximum size: </th><td>%ALLOWED%</td></tr>
    </table>
") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 21
        echo "
";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->addData("field.uploads.template.large-file", $this->env->getExtension('Bolt')->pregReplace(trim((isset($context["template_upload_too_large"]) ? $context["template_upload_too_large"] : null)), "/>\\s+</", "><")), "html", null, true);
        echo "

";
        // line 25
        echo "
";
        // line 26
        $context["template_upload_wrong_type"] = ('' === $tmp = "    <p>File type not allowed:</p>
    <table>
        <tr><th>Name:</th><td>%FILENAME%</td></tr>
        <tr><th>Type:</th><td>%FILETYPE%</td></tr>
        <tr><th>Allowed types:</th><td>%ALLOWED%</td></tr>
    </table>
") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 34
        echo "
";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->addData("field.uploads.template.wrong-type", $this->env->getExtension('Bolt')->pregReplace(trim((isset($context["template_upload_wrong_type"]) ? $context["template_upload_wrong_type"] : null)), "/>\\s+</", "><")), "html", null, true);
        echo "
";
        
        $__internal_23d349d07a5fd0b797eb13453fffd676ccfa890df25462c218554ff97ba045ca->leave($__internal_23d349d07a5fd0b797eb13453fffd676ccfa890df25462c218554ff97ba045ca_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/data/_uploads.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 35,  68 => 34,  60 => 26,  57 => 25,  52 => 22,  49 => 21,  41 => 13,  38 => 12,  33 => 9,  30 => 8,  25 => 3,  22 => 2,);
    }
}
/* {### Template: Upload errror ###}*/
/* */
/* {% set template_upload_error %}*/
/*     <p>There was an error uploading the file. Make sure the file is not corrupt,*/
/*     and that the upload-folder is writable.</p>*/
/*     <p>Error message:<br><i>%ERROR%<i></p>*/
/* {% endset %}*/
/* */
/* {{ data('field.uploads.template.error', template_upload_error|trim|preg_replace('/>\\s+</', '><')) }}*/
/* */
/* {### Template: Filesize too large ###}*/
/* */
/* {% set template_upload_too_large %}*/
/*     <p>File is too large:</p>*/
/*     <table>*/
/*         <tr><th>Name: </th><td>%FILENAME%</td></tr>*/
/*         <tr><th>Size: </th><td>%FILESIZE%</td></tr>*/
/*         <tr><th>Maximum size: </th><td>%ALLOWED%</td></tr>*/
/*     </table>*/
/* {% endset %}*/
/* */
/* {{ data('field.uploads.template.large-file', template_upload_too_large|trim|preg_replace('/>\\s+</', '><')) }}*/
/* */
/* {### Template: File has wrong type ###}*/
/* */
/* {% set template_upload_wrong_type %}*/
/*     <p>File type not allowed:</p>*/
/*     <table>*/
/*         <tr><th>Name:</th><td>%FILENAME%</td></tr>*/
/*         <tr><th>Type:</th><td>%FILETYPE%</td></tr>*/
/*         <tr><th>Allowed types:</th><td>%ALLOWED%</td></tr>*/
/*     </table>*/
/* {% endset %}*/
/* */
/* {{ data('field.uploads.template.wrong-type', template_upload_wrong_type|trim|preg_replace('/>\\s+</', '><')) }}*/
/* */
