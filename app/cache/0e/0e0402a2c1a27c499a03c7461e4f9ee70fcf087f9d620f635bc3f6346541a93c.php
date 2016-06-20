<?php

/* entradas/record.twig */
class __TwigTemplate_02b0a765a8ea107fc709d61666eadd7ef2094f8b88561265810997f3fee8b327 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/_master.twig", "entradas/record.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/_master.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b8d865949ae8e5e4d546d5911740a5d3312f7e375b143b80dd9f9674b4f0f1d = $this->env->getExtension("native_profiler");
        $__internal_6b8d865949ae8e5e4d546d5911740a5d3312f7e375b143b80dd9f9674b4f0f1d->enter($__internal_6b8d865949ae8e5e4d546d5911740a5d3312f7e375b143b80dd9f9674b4f0f1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "entradas/record.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b8d865949ae8e5e4d546d5911740a5d3312f7e375b143b80dd9f9674b4f0f1d->leave($__internal_6b8d865949ae8e5e4d546d5911740a5d3312f7e375b143b80dd9f9674b4f0f1d_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_91a5390f86fd56e0df43263fffaf8ce53b9e1614d13e37c2540e91ccae2053d0 = $this->env->getExtension("native_profiler");
        $__internal_91a5390f86fd56e0df43263fffaf8ce53b9e1614d13e37c2540e91ccae2053d0->enter($__internal_91a5390f86fd56e0df43263fffaf8ce53b9e1614d13e37c2540e91ccae2053d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
";
        // line 5
        echo $this->env->getExtension('dump')->dump($this->env, $context, (isset($context["record"]) ? $context["record"] : null));
        echo "

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-xs-12\">

        <!-- Post Content -->
        <article>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                        <p>Never in all their history have men been able truly to conceive of the world as one: a single sphere, a globe, having the qualities of a globe, a round earth in which all the directions eventually meet, in which there is no center because every point, or none, is center — an equal earth which all men occupy as equals. The airman's earth, if free men make it, will be truly round: a globe in practice, not in theory.</p>

                        <p>Science cuts two ways, of course; its products can be used for both good and evil. But there's no turning back from science. The early warnings about technological dangers also come from science.</p>

                        <p>What was most significant about the lunar voyage was not that man set foot on the Moon but that they set eye on the earth.</p>

                        <p>A Chinese tale tells of some men sent to harm a young girl who, upon seeing her beauty, become her protectors rather than her violators. That's how I felt seeing the Earth for the first time. I could not help but love and cherish her.</p>

                        <p>For those who have seen the Earth from space, and for the hundreds and perhaps thousands more who will, the experience most certainly changes your perspective. The things that we share in our world are far more valuable than those which divide us.</p>

                        <h2 class=\"section-heading\">The Final Frontier</h2>

                        <p>There can be no thought of finishing for ‘aiming for the stars.’ Both figuratively and literally, it is a task to occupy the generations. And no matter how much progress one makes, there is always the thrill of just beginning.</p>

                        <p>There can be no thought of finishing for ‘aiming for the stars.’ Both figuratively and literally, it is a task to occupy the generations. And no matter how much progress one makes, there is always the thrill of just beginning.</p>

                        <blockquote>The dreams of yesterday are the hopes of today and the reality of tomorrow. Science has not yet mastered prophecy. We predict too much for the next year and yet far too little for the next ten.</blockquote>

                        <p>Spaceflights cannot be stopped. This is not the work of any one man or even a group of men. It is a historical process which mankind is carrying out in accordance with the natural laws of human development.</p>

                        <h2 class=\"section-heading\">Reaching for the Stars</h2>

                        <p>As we got further and further away, it [the Earth] diminished in size. Finally it shrank to the size of a marble, the most beautiful you can imagine. That beautiful, warm, living object looked so fragile, so delicate, that if you touched it with a finger it would crumble and fall apart. Seeing this has to change a man.</p>

                        <a href=\"#\">
                            <img class=\"img-responsive\" src=\"img/post-sample-image.jpg\" alt=\"\">
                        </a>
                        <span class=\"caption text-muted\">To go places and do things that have never been done before – that’s what living is all about.</span>

                        <p>Space, the final frontier. These are the voyages of the Starship Enterprise. Its five-year mission: to explore strange new worlds, to seek out new life and new civilizations, to boldly go where no man has gone before.</p>

                        <p>As I stand out here in the wonders of the unknown at Hadley, I sort of realize there’s a fundamental truth to our nature, Man must explore, and this is exploration at its greatest.</p>

                        <p>Placeholder text by <a href=\"http://spaceipsum.com/\">Space Ipsum</a>. Photographs by <a href=\"https://www.flickr.com/photos/nasacommons/\">NASA on The Commons</a>.</p>
                    </div>
                </div>
            </div>
        </article>
            
        </div>
    </div>
</div>

";
        
        $__internal_91a5390f86fd56e0df43263fffaf8ce53b9e1614d13e37c2540e91ccae2053d0->leave($__internal_91a5390f86fd56e0df43263fffaf8ce53b9e1614d13e37c2540e91ccae2053d0_prof);

    }

    public function getTemplateName()
    {
        return "entradas/record.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/_master.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* {{ dump(record) }}*/
/* */
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="col-xs-12">*/
/* */
/*         <!-- Post Content -->*/
/*         <article>*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">*/
/*                         <p>Never in all their history have men been able truly to conceive of the world as one: a single sphere, a globe, having the qualities of a globe, a round earth in which all the directions eventually meet, in which there is no center because every point, or none, is center — an equal earth which all men occupy as equals. The airman's earth, if free men make it, will be truly round: a globe in practice, not in theory.</p>*/
/* */
/*                         <p>Science cuts two ways, of course; its products can be used for both good and evil. But there's no turning back from science. The early warnings about technological dangers also come from science.</p>*/
/* */
/*                         <p>What was most significant about the lunar voyage was not that man set foot on the Moon but that they set eye on the earth.</p>*/
/* */
/*                         <p>A Chinese tale tells of some men sent to harm a young girl who, upon seeing her beauty, become her protectors rather than her violators. That's how I felt seeing the Earth for the first time. I could not help but love and cherish her.</p>*/
/* */
/*                         <p>For those who have seen the Earth from space, and for the hundreds and perhaps thousands more who will, the experience most certainly changes your perspective. The things that we share in our world are far more valuable than those which divide us.</p>*/
/* */
/*                         <h2 class="section-heading">The Final Frontier</h2>*/
/* */
/*                         <p>There can be no thought of finishing for ‘aiming for the stars.’ Both figuratively and literally, it is a task to occupy the generations. And no matter how much progress one makes, there is always the thrill of just beginning.</p>*/
/* */
/*                         <p>There can be no thought of finishing for ‘aiming for the stars.’ Both figuratively and literally, it is a task to occupy the generations. And no matter how much progress one makes, there is always the thrill of just beginning.</p>*/
/* */
/*                         <blockquote>The dreams of yesterday are the hopes of today and the reality of tomorrow. Science has not yet mastered prophecy. We predict too much for the next year and yet far too little for the next ten.</blockquote>*/
/* */
/*                         <p>Spaceflights cannot be stopped. This is not the work of any one man or even a group of men. It is a historical process which mankind is carrying out in accordance with the natural laws of human development.</p>*/
/* */
/*                         <h2 class="section-heading">Reaching for the Stars</h2>*/
/* */
/*                         <p>As we got further and further away, it [the Earth] diminished in size. Finally it shrank to the size of a marble, the most beautiful you can imagine. That beautiful, warm, living object looked so fragile, so delicate, that if you touched it with a finger it would crumble and fall apart. Seeing this has to change a man.</p>*/
/* */
/*                         <a href="#">*/
/*                             <img class="img-responsive" src="img/post-sample-image.jpg" alt="">*/
/*                         </a>*/
/*                         <span class="caption text-muted">To go places and do things that have never been done before – that’s what living is all about.</span>*/
/* */
/*                         <p>Space, the final frontier. These are the voyages of the Starship Enterprise. Its five-year mission: to explore strange new worlds, to seek out new life and new civilizations, to boldly go where no man has gone before.</p>*/
/* */
/*                         <p>As I stand out here in the wonders of the unknown at Hadley, I sort of realize there’s a fundamental truth to our nature, Man must explore, and this is exploration at its greatest.</p>*/
/* */
/*                         <p>Placeholder text by <a href="http://spaceipsum.com/">Space Ipsum</a>. Photographs by <a href="https://www.flickr.com/photos/nasacommons/">NASA on The Commons</a>.</p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </article>*/
/*             */
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* {% endblock main %}*/
