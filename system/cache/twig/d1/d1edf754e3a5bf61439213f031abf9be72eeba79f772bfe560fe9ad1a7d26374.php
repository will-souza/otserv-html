<?php

/* creatures/acidblob.html.twig */
class __TwigTemplate_5bdf49308932a20e3daf01d27f2fbb1813e103867ca593b92b6846751188bf0d extends Twig_Template
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
        // line 1
        echo "<div style=\"position: relative; height: 15px; width: 100%;\">  <a style=\"float: right;\" href=\"?subtopic=creatures&race=cultacolyte\">next <img src=\"images/arrow_right.gif\" width=\"15\" height=\"11\" border=\"0\"/></a>  <div style=\"position: absolute; width: 80%; margin-left: 10%; margin-right: 10%; text-align: center;\"><a href=\"?subtopic=creatures\"><img src=\"images/arrow_up.gif\" width=\"11\" height=\"15\" border=\"0\"/> back</a></div></div><div style=\"position: relative; top: 25px; clear: both; \"><div style=\"height: 64px; margin-bottom: 5px;\">  <h2 style=\"float: right;\">Acid Blobs</h2>  <img src=\"images/creatures/acidblob.gif\"/></div><div style=\"margin-bottom: 35px; clear: both;\">  <p>Highly destructive and corrosive, the Acid Blob has little in common with the ordinary slime. They are much better in finding and pursuing a target than their distant cousins. While the ordinary slime is driven by the primal urge to get food, the Acid Blob is out for destruction. It is indeed a frightening sight when a bunch of these creatures crawls towards a single target with the intention to completely destroy it.<br/>Some researchers speculate that Acid Blobs share their intelligence with blobs all over the world. As Acid Blobs reproduce themselves by splitting into two entities, this thesis might have an element of truth.<br/>Be it as it may, the Acid Blob is a constant threat particularly to the environment. Since living creatures are often smart and quick enough to avoid the attacks of the blobs, any kind of  plants,  constructions and the like are usually not that lucky and are annihilated by their attacks.<br/>In the past, some eccentric madmen used Acid Blobs as waste disposal, which was considered to be somewhat stylish. However, after the Acid Blobs had digested a certain amount of waste, they started reproducing themselves multiple times which started to become a real problem. After several unpleasant incidents, this way of waste disposal was stopped, however, the results of such folly can still be seen at various places.</p>  <p>Acid Blobs have 250 hitpoints. They are immune to death and earth damage. Moreover, they are strong against ice damage. On the other hand, they are weak against energy and fire damage. These creatures can neither be summoned nor convinced.</p>  <p>Acid Blobs yield 250 experience points. They carry globs of acid slime with them.</p>  </div></div>";
    }

    public function getTemplateName()
    {
        return "creatures/acidblob.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "creatures/acidblob.html.twig", "/var/www/html/system/templates/creatures/acidblob.html.twig");
    }
}
