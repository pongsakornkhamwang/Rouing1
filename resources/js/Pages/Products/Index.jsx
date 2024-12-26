import { Link } from '@inertiajs/react';

export default function Index({ products, bannerImage }) {
    return (
        <div style={{ fontFamily: 'Arial, sans-serif', lineHeight: '1.6', color: '#333' }}>


            {/* รูปภาพแบนเนอร์ */}
            <div style={{ marginBottom: '30px', textAlign: 'center' }}>
                <img src={bannerImage} alt="Banner" style={{
                    width: '100%',
                    maxHeight: '400px',
                    objectFit: 'cover',
                    borderRadius: '10px',
                }} />
            </div>

            {/* รายการสินค้า */}
            <div style={{
                display: 'grid',
                gridTemplateColumns: 'repeat(3, 1fr)',
                gap: '20px',
                padding: '20px',
            }}>
                {products.map((product) => (
                    <div key={product.id} style={{
                        border: '1px solid #ddd',
                        borderRadius: '10px',
                        padding: '15px',
                        textAlign: 'center',
                        backgroundColor: '#fff',
                        boxShadow: '0 4px 8px rgba(0, 0, 0, 0.1)',
                    }}>
                        <img src={product.image} alt={product.name} style={{
                            width: '100%',
                            height: '200px',
                            objectFit: 'contain',
                            marginBottom: '10px',
                        }} />
                        <h2 style={{ fontSize: '20px', margin: '10px 0' }}>{product.name}</h2>
                        <p style={{ fontSize: '16px', color: '#666' }}>Price: ${product.price}</p>
                        <Link href={`/products/${product.id}`}>
                            <button style={{
                                backgroundColor: 'blue',
                                color: 'white',
                                padding: '10px 20px',
                                border: 'none',
                                borderRadius: '5px',
                                fontSize: '16px',
                            }}>
                                View Details
                            </button>
                        </Link>
                    </div>
                ))}
            </div>
        </div>
    );
}
