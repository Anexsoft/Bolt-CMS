<?php

/* @bolt/login/login.twig */
class __TwigTemplate_0c9627039a5eaf7fd139733812da2d529843245b1750ceb79e5ffb1c10dfaef3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("@bolt/_base/_page-no_nav.twig", "@bolt/login/login.twig", 2);
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
        $__internal_bb9cc7960549ef9e40a2fc8482598f3b315b652baebc59c7f7e01f6d2d2549c2 = $this->env->getExtension("native_profiler");
        $__internal_bb9cc7960549ef9e40a2fc8482598f3b315b652baebc59c7f7e01f6d2d2549c2->enter($__internal_bb9cc7960549ef9e40a2fc8482598f3b315b652baebc59c7f7e01f6d2d2549c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/login/login.twig"));

        // line 4
        $context["form_class"] = "col-sm-12 login-block center-block";
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb9cc7960549ef9e40a2fc8482598f3b315b652baebc59c7f7e01f6d2d2549c2->leave($__internal_bb9cc7960549ef9e40a2fc8482598f3b315b652baebc59c7f7e01f6d2d2549c2_prof);

    }

    // line 6
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_d774b6cf1db324de0954e3bcf0c16589a74c9befe4fcc2b3c3c4e3dc2dfbc6af = $this->env->getExtension("native_profiler");
        $__internal_d774b6cf1db324de0954e3bcf0c16589a74c9befe4fcc2b3c3c4e3dc2dfbc6af->enter($__internal_d774b6cf1db324de0954e3bcf0c16589a74c9befe4fcc2b3c3c4e3dc2dfbc6af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo $this->env->getExtension('Bolt')->trans("page.login.title");
        
        $__internal_d774b6cf1db324de0954e3bcf0c16589a74c9befe4fcc2b3c3c4e3dc2dfbc6af->leave($__internal_d774b6cf1db324de0954e3bcf0c16589a74c9befe4fcc2b3c3c4e3dc2dfbc6af_prof);

    }

    // line 8
    public function block_page_main($context, array $blocks = array())
    {
        $__internal_b269a5b58ad57a944cc6ad23934fd1d356fde438562d78095cab5d61ed9650f6 = $this->env->getExtension("native_profiler");
        $__internal_b269a5b58ad57a944cc6ad23934fd1d356fde438562d78095cab5d61ed9650f6->enter($__internal_b269a5b58ad57a944cc6ad23934fd1d356fde438562d78095cab5d61ed9650f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_main"));

        // line 9
        echo "
    <form method=\"post\" class=\"submitspinner\">

        <div class=\"form-group\">
            <label for=\"username\" class=\"control-label\">";
        // line 13
        echo $this->env->getExtension('Bolt')->trans("page.login.label.username");
        echo "</label>
            <div class=\"input-group\">
                <label for=\"username\" class=\"input-group-addon\"><i class=\"fa fa-fw fa-user\"></i></label>
                <input id=\"username\" class=\"form-control\" type=\"text\" autofocus name=\"username\" placeholder=\"";
        // line 16
        echo $this->env->getExtension('Bolt')->trans("page.login.placeholder.password");
        echo " …\" ";
        if (array_key_exists("username", $context)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : null), "html", null, true);
            echo "\"";
        }
        echo " required>
            </div>
        </div>

        <div class=\"form-group password-group\">
            <label for=\"password\" class=\"control-label\">
                ";
        // line 22
        echo $this->env->getExtension('Bolt')->trans("page.login.label.password");
        echo " &nbsp;
                <span class=\"togglepass show-password\"><i class=\"fa fa-fw fa-eye\"></i> ";
        // line 23
        echo $this->env->getExtension('Bolt')->trans("page.login.password-show");
        echo "</span>
                <span class=\"togglepass hide-password\"><i class=\"fa fa-fw fa-eye-slash\"></i> ";
        // line 24
        echo $this->env->getExtension('Bolt')->trans("page.login.password-hide");
        echo "</span>
            </label>
            <div class=\"input-group\">
                <label for=\"password\" class=\"input-group-addon\"><i class=\"fa fa-fw fa-key\"></i></label>
                <input id=\"password\" class=\"form-control\" type=\"password\" name=\"password\" placeholder=\"";
        // line 28
        echo $this->env->getExtension('Bolt')->trans("users.your-password");
        echo " …\">
            </div>
        </div>

        <p class=\"login-group\">
            <button type=\"submit\" class=\"btn btn-primary\" name=\"action\" value=\"login\">
                <i class=\"fa fa-sign-in fa-fw\"></i> ";
        // line 34
        echo $this->env->getExtension('Bolt')->trans("page.login.button.log-on");
        echo "
            </button>
            <button type=\"button\" class=\"btn btn-link login-forgot\"> ";
        // line 36
        echo $this->env->getExtension('Bolt')->trans("page.login.button.forgot-password");
        echo "</button>
        </p>
        <p style=\"display: none;\" class=\"reset-group\">
            <button type=\"submit\" class=\"btn btn-primary\" name=\"action\" value=\"reset\"><i class=\"fa fa-envelope-o\"></i> ";
        // line 39
        echo $this->env->getExtension('Bolt')->trans("page.login.button.reset-password");
        echo "</button>
            <button type=\"button\" class=\"btn btn-link login-remembered\"> ";
        // line 40
        echo $this->env->getExtension('Bolt')->trans("page.login.button.back");
        echo "</button>
        </p>

        <p class=\"cookie-notice alert alert-danger\">
            ";
        // line 44
        echo $this->env->getExtension('Bolt')->trans("page.login.cookies-required");
        echo "
        </p>

    </form>

";
        
        $__internal_b269a5b58ad57a944cc6ad23934fd1d356fde438562d78095cab5d61ed9650f6->leave($__internal_b269a5b58ad57a944cc6ad23934fd1d356fde438562d78095cab5d61ed9650f6_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/login/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 44,  122 => 40,  118 => 39,  112 => 36,  107 => 34,  98 => 28,  91 => 24,  87 => 23,  83 => 22,  68 => 16,  62 => 13,  56 => 9,  50 => 8,  38 => 6,  31 => 2,  29 => 4,  11 => 2,);
    }
}
/* {# Page: Login #}*/
/* {% extends '@bolt/_base/_page-no_nav.twig' %}*/
/* */
/* {% set form_class = 'col-sm-12 login-block center-block' %}*/
/* */
/* {% block page_title __('page.login.title') %}*/
/* */
/* {% block page_main %}*/
/* */
/*     <form method="post" class="submitspinner">*/
/* */
/*         <div class="form-group">*/
/*             <label for="username" class="control-label">{{ __('page.login.label.username') }}</label>*/
/*             <div class="input-group">*/
/*                 <label for="username" class="input-group-addon"><i class="fa fa-fw fa-user"></i></label>*/
/*                 <input id="username" class="form-control" type="text" autofocus name="username" placeholder="{{ __('page.login.placeholder.password') }} …" {% if username is defined %}value="{{ username }}"{% endif %} required>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="form-group password-group">*/
/*             <label for="password" class="control-label">*/
/*                 {{ __('page.login.label.password') }} &nbsp;*/
/*                 <span class="togglepass show-password"><i class="fa fa-fw fa-eye"></i> {{ __('page.login.password-show') }}</span>*/
/*                 <span class="togglepass hide-password"><i class="fa fa-fw fa-eye-slash"></i> {{ __('page.login.password-hide') }}</span>*/
/*             </label>*/
/*             <div class="input-group">*/
/*                 <label for="password" class="input-group-addon"><i class="fa fa-fw fa-key"></i></label>*/
/*                 <input id="password" class="form-control" type="password" name="password" placeholder="{{ __('users.your-password') }} …">*/
/*             </div>*/
/*         </div>*/
/* */
/*         <p class="login-group">*/
/*             <button type="submit" class="btn btn-primary" name="action" value="login">*/
/*                 <i class="fa fa-sign-in fa-fw"></i> {{ __('page.login.button.log-on') }}*/
/*             </button>*/
/*             <button type="button" class="btn btn-link login-forgot"> {{ __('page.login.button.forgot-password') }}</button>*/
/*         </p>*/
/*         <p style="display: none;" class="reset-group">*/
/*             <button type="submit" class="btn btn-primary" name="action" value="reset"><i class="fa fa-envelope-o"></i> {{ __('page.login.button.reset-password') }}</button>*/
/*             <button type="button" class="btn btn-link login-remembered"> {{ __('page.login.button.back') }}</button>*/
/*         </p>*/
/* */
/*         <p class="cookie-notice alert alert-danger">*/
/*             {{ __('page.login.cookies-required') }}*/
/*         </p>*/
/* */
/*     </form>*/
/* */
/* {% endblock page_main %}*/
/* */
