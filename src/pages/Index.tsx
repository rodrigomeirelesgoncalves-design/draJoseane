import Header from '@/components/Header';
import Hero from '@/components/Hero';
import Features from '@/components/Features';
import About from '@/components/About';
import Specialties from '@/components/Specialties';
import HowItWorks from '@/components/HowItWorks';
import Testimonials from '@/components/Testimonials';
import FAQ from '@/components/FAQ';
import Contact from '@/components/Contact';
import Footer from '@/components/Footer';
import LocationTags from '@/components/LocationTags';
import WhatsAppButton from '@/components/WhatsAppButton';

const Index = () => {
  return (
    <div className="min-h-screen">
      <Header />
      <Hero />
      <Features />
      <About />
      <Specialties />
      <HowItWorks />
      <Testimonials />
      <FAQ />
      <Contact />
      <Footer />
      <LocationTags />
      <WhatsAppButton />
    </div>
  );
};

export default Index;
