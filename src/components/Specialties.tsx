import { Target, Shield, Heart, Eye, Zap, Sparkles } from 'lucide-react';

const Specialties = () => {
  const specialties = [
    {
      icon: Target,
      iconBg: 'bg-primary',
      title: 'Ansiedade',
      description: 'Tratamento especializado para transtornos de ansiedade, crises de pânico e preocupação excessiva.',
    },
    {
      icon: Shield,
      iconBg: 'bg-destructive/20',
      iconColor: 'text-destructive/70',
      title: 'Traumas Emocionais',
      description: 'Processamento e superação de experiências traumáticas através de técnicas baseadas em neurociência.',
    },
    {
      icon: Heart,
      iconBg: 'bg-teal-light',
      title: 'Crises Emocionais',
      description: 'Apoio terapêutico para momentos de instabilidade emocional, ajudando a recuperar o equilíbrio.',
    },
    {
      icon: Eye,
      iconBg: 'bg-foreground',
      iconColor: 'text-white',
      title: 'Medos e Insegurança',
      description: 'Trabalho terapêutico para superar medos limitantes e fortalecer a autoconfiança.',
    },
    {
      icon: Zap,
      iconBg: 'bg-teal-light',
      title: 'Sobrecarga Mental',
      description: 'Estratégias para lidar com estresse, esgotamento e sobrecarga do dia a dia moderno.',
    },
    {
      icon: Sparkles,
      iconBg: 'bg-primary',
      title: 'Transformação Consciente',
      description: 'Processo de autoconhecimento e desenvolvimento pessoal para uma vida mais plena.',
    },
  ];

  return (
    <section id="especialidades" className="section-padding bg-cream">
      <div className="container mx-auto px-4">
        <div className="text-center mb-12">
          <span className="inline-block px-4 py-2 bg-primary text-primary-foreground rounded-full text-sm font-medium mb-4">
            Especialidades
          </span>
          <h2 className="font-serif text-3xl md:text-4xl font-bold text-foreground mb-4">
            Como posso te <span className="text-primary">ajudar</span>
          </h2>
          <p className="text-muted-foreground max-w-2xl mx-auto">
            Ofereço tratamento especializado para diversas questões emocionais, sempre com uma abordagem acolhedora e personalizada.
          </p>
        </div>
        
        <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
          {specialties.map((specialty, index) => (
            <div
              key={index}
              className="bg-white p-6 rounded-2xl shadow-sm border border-border hover:shadow-lg transition-all"
            >
              <div className={`w-12 h-12 mb-4 ${specialty.iconBg} rounded-xl flex items-center justify-center`}>
                <specialty.icon size={22} className={specialty.iconColor || 'text-primary-foreground'} />
              </div>
              <h3 className="font-semibold text-lg text-foreground mb-3">
                {specialty.title}
              </h3>
              <p className="text-muted-foreground text-sm">
                {specialty.description}
              </p>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
};

export default Specialties;
