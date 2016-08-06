<?php

/* base.html.twig */
class __TwigTemplate_9229868d397e0b92933ec6021675650cc00efc2b8a1a6d0956ef155375288d71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf79f2d92d8ec9f82b19b7921b76e3d5da3975cf40263d412bb9fd1e6ddc930d = $this->env->getExtension("native_profiler");
        $__internal_cf79f2d92d8ec9f82b19b7921b76e3d5da3975cf40263d412bb9fd1e6ddc930d->enter($__internal_cf79f2d92d8ec9f82b19b7921b76e3d5da3975cf40263d412bb9fd1e6ddc930d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_cf79f2d92d8ec9f82b19b7921b76e3d5da3975cf40263d412bb9fd1e6ddc930d->leave($__internal_cf79f2d92d8ec9f82b19b7921b76e3d5da3975cf40263d412bb9fd1e6ddc930d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_17d975ddd7267e65a6e8b56a6dd8eb6b48192b476163ca6fbd0d2e9b8680ceef = $this->env->getExtension("native_profiler");
        $__internal_17d975ddd7267e65a6e8b56a6dd8eb6b48192b476163ca6fbd0d2e9b8680ceef->enter($__internal_17d975ddd7267e65a6e8b56a6dd8eb6b48192b476163ca6fbd0d2e9b8680ceef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_17d975ddd7267e65a6e8b56a6dd8eb6b48192b476163ca6fbd0d2e9b8680ceef->leave($__internal_17d975ddd7267e65a6e8b56a6dd8eb6b48192b476163ca6fbd0d2e9b8680ceef_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d68b0edf3520f55ffe31546abf55df55abdfb21bd7de54545a7199f8a2405f4d = $this->env->getExtension("native_profiler");
        $__internal_d68b0edf3520f55ffe31546abf55df55abdfb21bd7de54545a7199f8a2405f4d->enter($__internal_d68b0edf3520f55ffe31546abf55df55abdfb21bd7de54545a7199f8a2405f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d68b0edf3520f55ffe31546abf55df55abdfb21bd7de54545a7199f8a2405f4d->leave($__internal_d68b0edf3520f55ffe31546abf55df55abdfb21bd7de54545a7199f8a2405f4d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e54d6c5b65110c6c7fdd51146324cc07e357062734ddbf3e2589d318f287f08 = $this->env->getExtension("native_profiler");
        $__internal_8e54d6c5b65110c6c7fdd51146324cc07e357062734ddbf3e2589d318f287f08->enter($__internal_8e54d6c5b65110c6c7fdd51146324cc07e357062734ddbf3e2589d318f287f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8e54d6c5b65110c6c7fdd51146324cc07e357062734ddbf3e2589d318f287f08->leave($__internal_8e54d6c5b65110c6c7fdd51146324cc07e357062734ddbf3e2589d318f287f08_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f9882a0d2a9ac2e89eba80195c9e628fe375e92ee97e37e61733f46506f74462 = $this->env->getExtension("native_profiler");
        $__internal_f9882a0d2a9ac2e89eba80195c9e628fe375e92ee97e37e61733f46506f74462->enter($__internal_f9882a0d2a9ac2e89eba80195c9e628fe375e92ee97e37e61733f46506f74462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f9882a0d2a9ac2e89eba80195c9e628fe375e92ee97e37e61733f46506f74462->leave($__internal_f9882a0d2a9ac2e89eba80195c9e628fe375e92ee97e37e61733f46506f74462_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
